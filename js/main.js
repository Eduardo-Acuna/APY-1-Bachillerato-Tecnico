// ---------- menú móvil ----------
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
if (navToggle && navLinks) {
  navToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
}

// ---------- temario: navegación lateral (temario_matematica.php, temario_castellano.php, temario_guarani.php) ----------
document.querySelectorAll('.temario-nav-item').forEach(btn => {
  btn.addEventListener('click', () => {
    const shell = btn.closest('.temario-shell');
    if (!shell) return;
    shell.querySelectorAll('.temario-nav-item').forEach(b => b.classList.remove('active'));
    shell.querySelectorAll('.temario-pane').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    const target = document.getElementById(btn.dataset.target);
    if (target) target.classList.add('active');
    window.scrollTo({ top: shell.offsetTop - 90, behavior: 'smooth' });
  });
});

// ---------- filtros de exámenes anteriores (examenes.php) ----------
const filterBar = document.getElementById('filterBar');
if (filterBar) {
  const chips = filterBar.querySelectorAll('.chip');
  const groups = document.querySelectorAll('[data-group]');
  chips.forEach(chip => {
    chip.addEventListener('click', () => {
      chips.forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      const filter = chip.dataset.filter;
      groups.forEach(g => {
        g.style.display = (filter === 'all' || g.dataset.group === filter) ? '' : 'none';
      });
    });
  });
}
