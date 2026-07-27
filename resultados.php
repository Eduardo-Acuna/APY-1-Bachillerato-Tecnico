<?php
$active = 'resultados';
$storageFile = __DIR__ . '/storage/resultados.json';
$historial = [];
if (file_exists($storageFile)) {
  $raw = file_get_contents($storageFile);
  $decoded = json_decode($raw, true);
  if (is_array($decoded)) { $historial = $decoded; }
}
// más reciente primero
$historial = array_reverse($historial);

$nombres = ['matematica' => 'Matemática', 'lengua' => 'Lengua y Literatura Castellana', 'guarani' => "Guaraní Ñe'ẽ"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mis resultados — APY | 1</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:20px;">
    <div class="wrap">
      <div class="eyebrow">Historial guardado en el servidor</div>
      <h1 style="font-size:clamp(2rem,4vw,2.8rem);">Mis resultados</h1>
      <p class="lede" style="max-width:60ch;">Cada vez que terminás un simulacro, el resultado se guarda mediante <code>api/guardar_resultado.php</code>. Esta página lo lee directamente en el servidor con PHP.</p>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <?php if (empty($historial)): ?>
        <div class="empty-state card">
          Todavía no rendiste ningún simulacro en este servidor.<br>
          <a href="simulacro.php" class="btn pine mt" style="margin-top:16px;">Hacer mi primer simulacro</a>
        </div>
      <?php else: ?>
        <table class="history">
          <thead>
            <tr><th>Fecha</th><th>Materia</th><th>Puntaje</th><th>%</th></tr>
          </thead>
          <tbody>
            <?php foreach ($historial as $r): ?>
              <?php
                $materia = $nombres[$r['materia']] ?? htmlspecialchars($r['materia']);
                $pct = $r['total'] > 0 ? round(($r['puntaje'] / $r['total']) * 100) : 0;
              ?>
              <tr>
                <td><?= htmlspecialchars($r['fecha']) ?></td>
                <td><?= $materia ?></td>
                <td><?= (int)$r['puntaje'] ?> / <?= (int)$r['total'] ?></td>
                <td><?= $pct ?>%</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
