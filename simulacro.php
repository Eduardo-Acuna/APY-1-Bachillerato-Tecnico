<?php $active = 'simulacro'; include 'data/simulacro_data.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>APY1 | Simulacro de examen </title>
<link rel="icon" type="image/png" href="img/logo2.png">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:20px;">
    <div class="wrap">
      <div class="eyebrow">Simulacro cronometrado</div>
      <h1 style="font-size:clamp(2rem,4vw,2.8rem);">Elegí una materia y rendí el simulacro</h1>
      <p class="lede" style="max-width:60ch;">Cada simulacro funciona igual que la hoja de respuestas real: elegís una opción por pregunta rellenando la burbuja, y al finalizar obtenés tu corrección y puntaje al instante.</p>
    </div>
  </section>

  <section style="padding-top:0;" id="subject-picker-wrap">
    <div class="wrap">
      <div class="subject-picker">
        <?php foreach ($simulacro as $key => $s): ?>
          <button class="subject-card <?= $s['color'] ?>" data-subject="<?= $key ?>">
            <span class="icon-num">0<?= array_search($key, array_keys($simulacro)) + 1 ?></span>
            <h3><?= htmlspecialchars($s['nombre']) ?></h3>
            <p><?= htmlspecialchars($s['descripcion']) ?></p>
            <span class="count"><?= count($s['preguntas']) ?> preguntas · <?= max(10, ceil(count($s['preguntas']) * 1.5)) ?> min</span>
          </button>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section style="padding-top:0;" id="quiz-area">
    <div class="wrap">
      <div class="quiz-shell">
        <div class="quiz-top">
          <div><span id="quizSubjectName">Materia</span> · <span id="quizProgressLabel">Pregunta 1 de 10</span></div>
          <div class="timer" id="quizTimer">10:00</div>
        </div>
        <div class="progress-track"><div class="progress-fill" id="progressFill"></div></div>

        <div id="quizReading" style="display:none;padding:26px 30px 0;">
          <div class="callout">
            <h4>Texto para las preguntas de comprensión</h4>
            <p id="readingText" style="white-space:pre-line;margin-bottom:0;font-size:.94rem;"></p>
          </div>
        </div>

        <div class="quiz-body">
          <div class="quiz-question">
            <div class="q-eyebrow" id="quizEyebrow">Pregunta 1</div>
            <h3 id="quizQuestionText">Cargando…</h3>
            <ul class="answer-list" id="answerList"></ul>
          </div>
        </div>

        <div class="quiz-nav">
          <button class="btn ghost" id="btnPrev" type="button">← Anterior</button>
          <div class="dots" id="quizDots"></div>
          <button class="btn pine" id="btnNext" type="button">Siguiente →</button>
        </div>
      </div>

      <div class="quiz-shell" id="resultsShell" style="display:none;margin-top:26px;">
        <div class="results-panel">
          <div class="score-hero">
            <div class="score-big" id="scoreBig">0<span>/0</span></div>
            <div>
              <div class="badge" id="scoreBadge">Resultado</div>
              <p class="score-note" id="scoreNote" style="margin-top:10px;">Corrección instantánea, como en el ejemplo del cuadernillo: burbuja verde = correcta, roja = tu respuesta incorrecta.</p>
            </div>
          </div>
          <div style="display:flex;gap:12px;flex-wrap:wrap;margin-bottom:10px;">
            <button class="btn ghost" id="btnRetry" type="button">Repetir esta materia</button>
            <a href="simulacro.php" class="btn ghost">Elegir otra materia</a>
            <a href="resultados.php" class="btn pine">Ver mis resultados guardados</a>
          </div>
          <div id="reviewList" class="mt"></div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; ?>

<script>
  window.APY_SIMULACRO = <?= json_encode($simulacro, JSON_UNESCAPED_UNICODE) ?>;
</script>
<script src="js/main.js"></script>
<script src="js/simulacro.js"></script>
</body>
</html>
