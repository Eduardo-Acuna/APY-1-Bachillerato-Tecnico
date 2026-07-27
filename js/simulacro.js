(function () {
  const DATA = window.APY_SIMULACRO || {};
  const pickerWrap = document.getElementById('subject-picker-wrap');
  const quizArea = document.getElementById('quiz-area');
  const resultsShell = document.getElementById('resultsShell');

  const els = {
    subjectName: document.getElementById('quizSubjectName'),
    progressLabel: document.getElementById('quizProgressLabel'),
    timer: document.getElementById('quizTimer'),
    progressFill: document.getElementById('progressFill'),
    reading: document.getElementById('quizReading'),
    readingText: document.getElementById('readingText'),
    eyebrow: document.getElementById('quizEyebrow'),
    qText: document.getElementById('quizQuestionText'),
    answerList: document.getElementById('answerList'),
    dots: document.getElementById('quizDots'),
    btnPrev: document.getElementById('btnPrev'),
    btnNext: document.getElementById('btnNext'),
    btnRetry: document.getElementById('btnRetry'),
    scoreBig: document.getElementById('scoreBig'),
    scoreBadge: document.getElementById('scoreBadge'),
    reviewList: document.getElementById('reviewList'),
  };

  let state = null; // {key, subject, current, answers[], secondsLeft, timerId, finished}

  function startSubject(key) {
    const subject = DATA[key];
    if (!subject) return;
    const minutes = Math.max(10, Math.ceil(subject.preguntas.length * 1.5));

    state = {
      key,
      subject,
      current: 0,
      answers: new Array(subject.preguntas.length).fill(null),
      secondsLeft: minutes * 60,
      timerId: null,
      finished: false,
    };

    pickerWrap.classList.add('hidden');
    quizArea.classList.add('active');
    resultsShell.style.display = 'none';

    els.subjectName.textContent = subject.nombre;

    if (subject.lectura) {
      els.reading.style.display = '';
      els.readingText.textContent = subject.lectura;
    } else {
      els.reading.style.display = 'none';
    }

    buildDots();
    renderQuestion();
    startTimer();
    window.scrollTo({ top: quizArea.offsetTop - 90, behavior: 'smooth' });
  }

  function startTimer() {
    clearInterval(state.timerId);
    updateTimerDisplay();
    state.timerId = setInterval(() => {
      state.secondsLeft--;
      updateTimerDisplay();
      if (state.secondsLeft <= 0) {
        clearInterval(state.timerId);
        finishQuiz();
      }
    }, 1000);
  }

  function updateTimerDisplay() {
    const m = Math.floor(state.secondsLeft / 60);
    const s = state.secondsLeft % 60;
    els.timer.textContent = `${m}:${String(s).padStart(2, '0')}`;
    els.timer.classList.toggle('warn', state.secondsLeft <= 60);
  }

  function buildDots() {
    els.dots.innerHTML = '';
    state.subject.preguntas.forEach((_, i) => {
      const dot = document.createElement('button');
      dot.className = 'qdot';
      dot.type = 'button';
      dot.addEventListener('click', () => { state.current = i; renderQuestion(); });
      els.dots.appendChild(dot);
    });
    refreshDots();
  }

  function refreshDots() {
    [...els.dots.children].forEach((dot, i) => {
      dot.classList.toggle('answered', state.answers[i] !== null);
      dot.classList.toggle('current', i === state.current);
    });
  }

  const letters = ['a', 'b', 'c', 'd'];

  function renderQuestion() {
    const { subject, current, answers } = state;
    const q = subject.preguntas[current];

    els.eyebrow.textContent = `Pregunta ${current + 1} de ${subject.preguntas.length}`;
    els.progressLabel.textContent = `Pregunta ${current + 1} de ${subject.preguntas.length}`;
    els.progressFill.style.width = `${((current) / subject.preguntas.length) * 100}%`;
    els.qText.textContent = q.texto;

    els.answerList.innerHTML = '';
    q.opciones.forEach((op, i) => {
      const li = document.createElement('li');
      li.className = 'answer-opt' + (answers[current] === i ? ' selected' : '');
      li.innerHTML = `
        <span class="bubble">${letters[i]}</span>
        <span class="opt-text">${escapeHtml(op)}</span>
      `;
      li.addEventListener('click', () => {
        state.answers[current] = i;
        renderQuestion();
        refreshDots();
      });
      els.answerList.appendChild(li);
    });

    els.btnPrev.disabled = current === 0;
    els.btnNext.textContent = current === subject.preguntas.length - 1 ? 'Finalizar simulacro' : 'Siguiente →';
    refreshDots();
  }

  function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
  }

  els.btnPrev.addEventListener('click', () => {
    if (state.current > 0) { state.current--; renderQuestion(); }
  });

  els.btnNext.addEventListener('click', () => {
    if (state.current < state.subject.preguntas.length - 1) {
      state.current++;
      renderQuestion();
    } else {
      finishQuiz();
    }
  });

  function finishQuiz() {
    if (state.finished) return;
    state.finished = true;
    clearInterval(state.timerId);

    const { subject, answers } = state;
    let score = 0;
    subject.preguntas.forEach((q, i) => { if (answers[i] === q.correcta) score++; });
    const total = subject.preguntas.length;
    const pct = Math.round((score / total) * 100);

    quizArea.querySelector('.quiz-shell').style.display = 'none';
    resultsShell.style.display = 'block';

    els.scoreBig.innerHTML = `${score}<span>/${total}</span>`;
    els.scoreBadge.textContent = pct >= 60 ? `Aprobado · ${pct}%` : `A seguir practicando · ${pct}%`;
    els.scoreBadge.style.borderColor = pct >= 60 ? 'var(--pine)' : 'var(--red-pen)';
    els.scoreBadge.style.color = pct >= 60 ? 'var(--pine)' : 'var(--red-pen)';

    els.reviewList.innerHTML = subject.preguntas.map((q, i) => {
      const given = answers[i];
      const ok = given === q.correcta;
      const givenText = given === null ? 'Sin responder' : `${letters[given]}) ${escapeHtml(q.opciones[given])}`;
      const correctText = `${letters[q.correcta]}) ${escapeHtml(q.opciones[q.correcta])}`;
      return `
        <div class="review-item">
          <div class="rq">${i + 1}. ${escapeHtml(q.texto)}</div>
          <div class="ra ${ok ? 'ok' : 'bad'}">Tu respuesta: ${givenText}</div>
          ${ok ? '' : `<div class="ra ok">Respuesta correcta: ${correctText}</div>`}
        </div>`;
    }).join('');

    saveResult(state.key, score, total);
    window.scrollTo({ top: quizArea.offsetTop - 90, behavior: 'smooth' });
  }

  function saveResult(materia, puntaje, total) {
    fetch('api/guardar_resultado.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ materia, puntaje, total }),
    }).catch(() => { /* silencioso: si no hay servidor PHP corriendo, el simulacro sigue funcionando */ });
  }

  els.btnRetry.addEventListener('click', () => {
    quizArea.querySelector('.quiz-shell').style.display = '';
    startSubject(state.key);
  });

  document.querySelectorAll('[data-subject]').forEach(btn => {
    btn.addEventListener('click', () => startSubject(btn.dataset.subject));
  });
})();
