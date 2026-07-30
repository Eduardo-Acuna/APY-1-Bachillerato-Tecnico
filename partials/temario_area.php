<?php
/**
 * Renderiza UN área del temario como una vista de sidebar + contenido:
 * a la izquierda, la lista de capacidades de esa materia (con la cantidad
 * de ejercicios de cada una); a la derecha, el contenido de la capacidad
 * seleccionada (temas, teoría, demostración y ejemplos). El cambio entre
 * capacidades se hace con JS (js/main.js), sin recargar la página.
 *
 * Se incluye desde temario_matematica.php, temario_castellano.php y
 * temario_guarani.php, pasando la variable $area.
 */
if (!isset($area)) { return; }
$letters = ['a', 'b', 'c', 'd'];

$iconos = [
  'matematica' => '📐',
  'lengua'     => '📖',
  'guarani'    => '🌿',
];
$icono = $iconos[$area['id']] ?? '📘';

// Aplanamos bloques -> capacidades en una sola lista secuencial para el sidebar
$capacidades = [];
foreach ($area['bloques'] as $bloque) {
  foreach ($bloque['capacidades'] as $c) {
    $capacidades[] = $c;
  }
}
?>
<div class="temario-shell">

  <aside class="temario-sidebar">

    <nav class="temario-nav">
      <?php foreach ($capacidades as $i => $c): ?>
        <button type="button" class="temario-nav-item <?= $i === 0 ? 'active' : '' ?>" data-target="cap-<?= $area['id'] ?>-<?= $i ?>">
          <span class="tni-title"><?= htmlspecialchars($c['cap']) ?></span>

        </button>
      <?php endforeach; ?>
    </nav>
  </aside>

  <div class="temario-content">
  

    <?php foreach ($capacidades as $i => $c): ?>
      <div class="temario-pane <?= $i === 0 ? 'active' : '' ?>" id="cap-<?= $area['id'] ?>-<?= $i ?>">
        <div class="temario-content-head">
          <h2><?= htmlspecialchars($c['cap']) ?></h2>
          <p class="temario-subtitle"><?= htmlspecialchars(implode(', ', $c['temas'])) ?></p>
        </div>

        <?php if (!empty($c['teoria'])): ?>
          <div class="cap-teoria"><?= $c['teoria'] ?></div>
        <?php endif; ?>

        <?php if (!empty($c['demostracion'])): ?>
          <div class="cap-demo">
            <div class="cap-demo-label">Demostración</div>
            <?= $c['demostracion'] ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($c['ejemplos'])): ?>
          <div class="cap-ejemplos">
            <div class="cap-ejemplos-label">Ejercicios de ejemplo</div>
            <?php foreach ($c['ejemplos'] as $ej): ?>
              <div class="ejemplo-card">
                <div class="ejemplo-titulo"><?= htmlspecialchars($ej['titulo']) ?></div>
                <div class="ejemplo-texto"><?= htmlspecialchars($ej['texto']) ?></div>
                <ul class="ejemplo-opciones">
                  <?php foreach ($ej['opciones'] as $oi => $op): ?>
                    <li class="<?= $oi === $ej['correcta'] ? 'correct' : '' ?>">
                      <span class="letter"><?= $letters[$oi] ?></span>
                      <span><?= htmlspecialchars($op) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <?php if (!empty($ej['explicacion'])): ?>
                  <div class="ejemplo-explicacion">
                    <strong>Explicación:</strong> <?= htmlspecialchars($ej['explicacion']) ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
