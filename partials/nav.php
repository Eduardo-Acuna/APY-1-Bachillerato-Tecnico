<header class="site-header">
  <div class="header-bar"></div>
  <div class="wrap">
    <nav class="nav">
      <a href="index.php" class="brand">
        <span class="mark">APY<span>|</span>1</span>
        <span class="sub">Admisión&nbsp;Bachillerato&nbsp;Técnico</span>
      </a>
      <button class="nav-toggle" id="navToggle" aria-label="Abrir menú"><span></span></button>
      <ul class="nav-links" id="navLinks">
        <li><a href="index.php" class="<?= $active === 'inicio' ? 'active' : '' ?>">Inicio</a></li>
        <li><a href="temario.php" class="<?= $active === 'temario' ? 'active' : '' ?>">Temario</a></li>
        <li><a href="examenes.php" class="<?= $active === 'examenes' ? 'active' : '' ?>">Exámenes anteriores</a></li>
        <li><a href="simulacro.php" class="<?= $active === 'simulacro' ? 'active' : '' ?>">Simulacro</a></li>
        <li><a href="resultados.php" class="<?= $active === 'resultados' ? 'active' : '' ?>">Mis resultados</a></li>
      </ul>
    </nav>
  </div>
</header>
