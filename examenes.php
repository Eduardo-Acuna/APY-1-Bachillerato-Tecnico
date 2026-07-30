<?php $active = 'examenes'; include 'data/examenes_data.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>APY1 | Exámenes anteriores</title>
<link rel="icon" type="image/png" href="img/logo2.png">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:10px;">
    <div class="wrap">
      <div class="eyebrow">Cuadernillos reales</div>
      <h1 style="font-size:clamp(2rem,4vw,2.8rem);">Exámenes de admisión de años anteriores</h1>
      <p class="lede" style="max-width:64ch;">Una selección de ejercicios reales extraídos de las Pruebas de Admisión de Matemática (2020 y 2017) y de Lengua y Guaraní (2017), para que veas exactamente cómo se formulan las preguntas.</p>

      <div class="filter-bar mt" id="filterBar">
        <button class="chip active" data-filter="all">Todas</button>
        <button class="chip" data-filter="mat">Matemática</button>
        <button class="chip" data-filter="len">Lengua Castellana</button>
        <button class="chip" data-filter="gua">Guaraní</button>
      </div>
    </div>
  </section>

  <section style="padding-top:10px;">
    <div class="wrap">
      <?php foreach ($examenes as $ex): ?>
        <div data-group="<?= $ex['color'] ?>">
          <div class="exam-source">
            <h3><?= htmlspecialchars($ex['materia']) ?></h3>
            <span class="meta"><?= htmlspecialchars($ex['fuente']) ?> · Prueba de Admisión <?= htmlspecialchars($ex['anio']) ?></span>
          </div>
          <?php foreach ($ex['preguntas'] as $p): ?>
            <div class="question">
              <div class="q-head">
                <span class="q-num">#<?= $p['num'] ?></span>
                <span class="q-text"><?= htmlspecialchars($p['texto']) ?></span>
              </div>
              <ul class="options">
                <?php $letters=['a','b','c','d']; foreach($p['opciones'] as $i=>$op): ?>
                  <li><span class="letter"><?= $letters[$i] ?></span><span><?= htmlspecialchars($op) ?></span></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

      <div class="callout mt">
        <h4>Sobre este material</h4>
        <p style="margin-bottom:0;">Estas preguntas se muestran como ejemplo de estilo y dificultad, tal como aparecen en los cuadernillos originales de la Dirección General de Educación Técnica y Profesional. Para practicar con corrección automática y puntaje, resolvé el <a href="simulacro.php">simulacro</a>, que incluye una selección verificada de ejercicios equivalentes.</p>
      </div>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
