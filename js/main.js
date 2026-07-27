// ---------- menú móvil ----------
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
if (navToggle && navLinks) {
  navToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
}

// ---------- acordeón del temario ----------
document.querySelectorAll('[data-area]').forEach((block, idx) => {
  const toggle = block.querySelector('.area-toggle');
  toggle.addEventListener('click', () => {
    block.classList.toggle('open');
  });
  if (idx === 0) block.classList.add('open'); // primera área abierta por defecto
});

// ---------- filtros de exámenes anteriores ----------
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
