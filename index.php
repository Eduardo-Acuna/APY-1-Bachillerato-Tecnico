<?php $active = 'inicio'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>APY | 1 — Preparación para el examen de admisión Bachillerato Técnico</title>
<meta name="description" content="Plataforma educativa para prepararte al examen de admisión de los Bachilleratos Técnicos del Paraguay: temario, exámenes anteriores y simulacro.">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section class="hero">
    <div class="wrap" style="display:contents;">
    <div>
      <div class="eyebrow">Bachillerato Técnico · Paraguay</div>
      <h1>Rellená la burbuja correcta<br> el día del examen, no antes.</h1>
      <p class="lede">APY | 1 reúne el temario oficial, cuadernillos reales de años anteriores y un simulacro con corrección automática, para que llegues a la Prueba de Admisión sabiendo exactamente qué esperar.</p>
      <div class="hero-cta">
        <a href="simulacro.php" class="btn">Hacer un simulacro →</a>
        <a href="temario.php" class="btn ghost">Ver el temario completo</a>
      </div>
      <div class="hero-meta">
        <div><b>3</b>áreas evaluadas</div>
        <div><b>56+</b>preguntas verificadas</div>
        <div><b>90</b>min por prueba real</div>
      </div>
    </div>
    <div class="sheet">
      <div class="sheet-head"><span>Hoja de respuestas</span><span>Fila 1</span></div>
      <?php
        $demo = [
          [1,[1,0,0,0]],[2,[0,1,0,0]],[3,[0,0,1,0]],[4,[0,0,0,1]],
          [5,[1,0,0,0]],[6,[0,1,0,0]],[7,[0,0,0,1]],
        ];
        foreach($demo as $row):
          [$n,$fill]=$row; $letters=['a','b','c','d'];
      ?>
      <div class="sheet-row">
        <span class="num"><?= str_pad($n,2,'0',STR_PAD_LEFT) ?></span>
        <div class="bubble-row">
          <?php foreach($letters as $i=>$l): ?>
            <span class="bubble <?= $fill[$i] ? 'filled'.($n%2==0?' pine':'') : '' ?>"><?= $l ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    </div>
  </section>

  <section>
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow">Tres materias, un solo cuadernillo</div>
        <h2>Todo lo que entra en la prueba, organizado como en la prueba.</h2>
      </div>
      <div class="grid-3">
        <div class="card subject-mat">
          <span class="tag">Área 1</span>
          <h3>Matemática</h3>
          <p>Números y operaciones, álgebra, geometría, medidas y estadística.</p>
          <ul>
            <li>Fracciones, potenciación y radicación</li>
            <li>Factorización y ecuaciones</li>
            <li>Áreas, volúmenes y Teorema de Pitágoras</li>
            <li>Media, mediana y moda</li>
          </ul>
        </div>
        <div class="card subject-len">
          <span class="tag">Área 2</span>
          <h3>Lengua y Literatura Castellana</h3>
          <p>Comprensión de textos y expresión escrita, tal como se evalúa en la prueba real.</p>
          <ul>
            <li>Tipologías textuales y recursos literarios</li>
            <li>Conectores y cohesión</li>
            <li>Concordancia y tiempos verbales</li>
            <li>Acentuación y puntuación</li>
          </ul>
        </div>
        <div class="card subject-gua">
          <span class="tag">Área 3</span>
          <h3>Guaraní Ñe'ẽ</h3>
          <p>Comprensión de moñe'ẽrã y expresión oral y escrita en guaraní.</p>
          <ul>
            <li>Comprensión lectora y polisemia</li>
            <li>Demostrativos de lugar y tiempo</li>
            <li>Ortografía y tildes</li>
            <li>Conectores lógicos y de secuencia</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section style="background:var(--paper-2);border-top:1px solid var(--line);border-bottom:1px solid var(--line);">
    <div class="wrap">
      <div class="grid-2" style="align-items:center;">
        <div>
          <div class="eyebrow">Paso a paso</div>
          <h2>Tres pasos entre vos y la burbuja bien rellenada</h2>
          <p>La plataforma sigue el mismo orden con el que se prepara cualquier examen serio: primero entender qué se evalúa, después ver cómo se pregunta realmente, y por último medirte contra el reloj.</p>
        </div>
        <div class="callout">
          <h4>Ruta sugerida</h4>
          <ol>
            <li><strong>Temario</strong> — repasá cada bloque y capacidad exigida por el MEC.</li>
            <li><strong>Exámenes anteriores</strong> — resolvé ejercicios reales de cuadernillos 2017 y 2020.</li>
            <li><strong>Simulacro</strong> — rendí una prueba cronometrada con corrección inmediata.</li>
          </ol>
          <a href="temario.php" class="btn pine mt" style="margin-top:16px;">Empezar por el temario</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="wrap center">
      <div class="eyebrow" style="justify-content:center;">Simulacro</div>
      <h2>¿Ya repasaste? Poné a prueba lo que sabés.</h2>
      <p style="max-width:56ch;margin:0 auto 26px;">Un simulacro cronometrado dividido en las tres materias, con burbujas de respuesta idénticas a las de la hoja oficial y corrección automática al instante.</p>
      <a href="simulacro.php" class="btn">Ir al simulacro →</a>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
