<?php
$active = 'temario';
include 'data/temario_data.php';
$area = null;
foreach ($temario as $a) { if ($a['id'] === 'lengua') { $area = $a; break; } }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Temario de Lengua y Literatura Castellana — APY | 1</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:10px;">
    <div class="wrap">
      <h1 style="font-size:clamp(2rem,4vw,2.8rem);">Lengua y Literatura Castellana</h1>
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
          <p style="margin:0;">Continuá con Guaraní Ñe'ẽ.</p>
        </div>
        <a href="temario_guarani.php" class="btn pine">Siguiente área →</a>
      </div>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
