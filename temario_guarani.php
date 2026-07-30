<?php
$active = 'temario';
include 'data/temario_data.php';
$area = null;
foreach ($temario as $a) { if ($a['id'] === 'guarani') { $area = $a; break; } }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Temario de Guaraní Ñe'ẽ — APY | 1</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:10px;">
    <div class="wrap">
      <a href="index.html" class="btn ghost" style="margin-bottom: 24px;">← Volver</a>
      <h1 style="font-size:clamp(2rem,4vw,2.8rem);">Guaraní Ñe'ẽ</h1>

    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap-wide">
      <?php include 'partials/temario_area.php'; ?>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <div class="callout center">
        <h4>¿Ya repasaste las tres áreas?</h4>
        <p style="margin-bottom:18px;">Practicá con ejercicios reales de exámenes anteriores o rendí el simulacro cronometrado.</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
          <a href="examenes.php" class="btn ghost">Ver exámenes anteriores</a>
          <a href="simulacro.php" class="btn pine">Ir al simulacro</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
