<?php
$active = 'temario';
include 'data/temario_data.php';
$area = null;
foreach ($temario as $a) { if ($a['id'] === 'matematica') { $area = $a; break; } }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>APY1 1 | Temario de Matemática</title>
<link rel="icon" type="image/png" href="img/logo2.png">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:10px;">
    <div class="wrap">
      <a href="index.html" class="btn ghost" style="margin-bottom: 24px;">← Volver</a>
      <h1 style="font-size:clamp(2rem,4vw,2.8rem);">Matemática</h1>

    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap-wide">
      <?php include 'partials/temario_area.php'; ?>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <div class="callout" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;">
        <div>
          <h4 style="margin-bottom:4px;">Seguí repasando</h4>
          <p style="margin:0;">Continuá con Lengua y Literatura Castellana.</p>
        </div>
        <a href="temario_castellano.php" class="btn pine">Siguiente área →</a>
      </div>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
