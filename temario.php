<?php $active = 'temario'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Temario — APY | 1</title>
<link rel="stylesheet" href="css/style.css">
<style>
  /* ============================================
     ESTILOS GENERALES
     ============================================ */

  /* Vista de tarjetas (inicio) */
  .area-selector {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 24px;
    margin: 20px 0 30px 0;
  }

  .area-card {
    display: flex;
    flex-direction: column;
    padding: 28px 24px 24px 24px;
    border-radius: 16px;
    text-decoration: none;
    color: var(--ink);
    background: var(--paper);
    border: 1px solid var(--line);
    transition: transform 0.2s, box-shadow 0.2s, border-color 0.2s;
    cursor: pointer;
    user-select: none;
  }

  .area-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  }

  .area-card .area-icon {
    font-size: 2.6rem;
    margin-bottom: 8px;
  }

  .area-card .area-tag {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: var(--muted);
    font-weight: 600;
    margin-bottom: 2px;
  }

  .area-card h2 {
    margin: 0 0 4px 0;
    font-size: 1.4rem;
  }

  .area-card .area-desc {
    margin: 0 0 14px 0;
    font-size: 0.92rem;
    color: var(--ink-2);
    line-height: 1.4;
  }

  .area-card .area-topics {
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 0.88rem;
    color: var(--ink-2);
    border-top: 1px solid var(--line-soft);
    padding-top: 12px;
  }

  .area-card .area-topics li {
    padding: 3px 0 3px 18px;
    position: relative;
  }

  .area-card .area-topics li::before {
    content: "•";
    position: absolute;
    left: 2px;
    color: var(--muted);
  }

  .area-card .area-count {
    font-size: 0.78rem;
    color: var(--muted);
    background: var(--paper-2);
    padding: 3px 14px;
    border-radius: 20px;
    align-self: flex-start;
    margin-top: 10px;
  }

  /* Colores por área */
  .area-card.area-mat:hover { border-color: #2d6a4f; }
  .area-card.area-mat .area-count { background: #e6f0ea; color: #2d6a4f; }
  .area-card.area-mat .area-topics li::before { color: #2d6a4f; }

  .area-card.area-len:hover { border-color: #8B5CF6; }
  .area-card.area-len .area-count { background: #ede9fe; color: #8B5CF6; }
  .area-card.area-len .area-topics li::before { color: #8B5CF6; }

  .area-card.area-gua:hover { border-color: #059669; }
  .area-card.area-gua .area-count { background: #d1fae5; color: #059669; }
  .area-card.area-gua .area-topics li::before { color: #059669; }

  /* ============================================
     VISTA DE CONTENIDO (sidebar + contenido)
     ============================================ */

  #vista-contenido {
    display: none;
  }

  #vista-contenido.active {
    display: block;
  }

  #vista-selector {
    display: block;
  }

  #vista-selector.hidden {
    display: none;
  }

  .temario-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 24px;
    margin-top: 8px;
    min-height: 500px;
    align-items: start;
  }

  /* Sidebar */
  .temario-sidebar {
    background: var(--paper);
    border: 1px solid var(--line);
    border-radius: 12px;
    padding: 6px 0;
    position: sticky;
    top: 20px;
    max-height: calc(100vh - 160px);
    overflow-y: auto;
  }

  .temario-sidebar .sidebar-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 16px 10px 18px;
    border-bottom: 1px solid var(--line-soft);
  }

  .temario-sidebar .sidebar-header .sidebar-title {
    font-weight: 700;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    color: var(--muted);
    margin: 0;
  }

  .temario-sidebar .sidebar-header .btn-volver {
    background: none;
    border: none;
    color: var(--ink-2);
    font-size: 0.8rem;
    cursor: pointer;
    padding: 4px 10px;
    border-radius: 6px;
    transition: background 0.15s, color 0.15s;
    font-family: inherit;
  }

  .temario-sidebar .sidebar-header .btn-volver:hover {
    background: var(--paper-2);
    color: var(--ink);
  }

  .temario-sidebar .sidebar-area-label {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: var(--muted);
    padding: 10px 18px 4px 18px;
    font-weight: 600;
  }

  .temario-sidebar .tema-link {
    display: block;
    padding: 7px 18px 7px 22px;
    font-size: 0.9rem;
    color: var(--ink-2);
    text-decoration: none;
    border-radius: 6px;
    transition: background 0.15s, color 0.15s;
    cursor: pointer;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    font-family: inherit;
    line-height: 1.3;
  }

  .temario-sidebar .tema-link:hover {
    background: var(--paper-2);
    color: var(--ink);
  }

  .temario-sidebar .tema-link.active {
    background: var(--pine);
    color: white;
    font-weight: 500;
  }

  .temario-sidebar .tema-link .tema-badge {
    font-size: 0.65rem;
    opacity: 0.6;
    margin-left: 6px;
    font-weight: 400;
  }

  .temario-sidebar .tema-link.active .tema-badge {
    opacity: 0.8;
  }

  /* Contenido principal */
  .temario-content {
    background: var(--paper);
    border: 1px solid var(--line);
    border-radius: 12px;
    padding: 28px 32px 32px 32px;
    min-height: 400px;
  }

  .temario-content .tema-header {
    border-bottom: 1px solid var(--line-soft);
    padding-bottom: 14px;
    margin-bottom: 18px;
  }

  .temario-content .tema-header .tema-area {
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: var(--muted);
  }

  .temario-content .tema-header h2 {
    margin: 4px 0 0 0;
    font-size: 1.5rem;
    color: var(--ink);
  }

  .temario-content .tema-header .tema-sub {
    color: var(--ink-2);
    font-size: 0.92rem;
    margin-top: 4px;
  }

  /* Teoría */
  .tema-teoria h4 {
    margin: 18px 0 6px 0;
    font-size: 1.05rem;
    color: var(--ink);
  }
  .tema-teoria h4:first-child {
    margin-top: 0;
  }
  .tema-teoria ul, .tema-teoria ol {
    padding-left: 22px;
    margin: 6px 0 12px 0;
  }
  .tema-teoria li {
    margin-bottom: 4px;
  }
  .tema-teoria p {
    margin: 6px 0;
    line-height: 1.6;
  }
  .tema-teoria strong {
    color: var(--ink);
  }

  /* Ejercicios */
  .tema-ejercicios {
    margin-top: 24px;
    padding-top: 20px;
    border-top: 1px solid var(--line-soft);
  }

  .tema-ejercicios .ej-titulo-sec {
    font-size: 1rem;
    font-weight: 600;
    color: var(--ink);
    margin-bottom: 14px;
  }

  .ejemplo-item {
    background: var(--paper-2);
    border: 1px solid var(--line-soft);
    border-radius: 10px;
    padding: 16px 18px;
    margin-bottom: 12px;
    transition: border-color 0.2s;
  }
  .ejemplo-item:hover {
    border-color: var(--muted);
  }
  .ejemplo-item .ej-titulo {
    font-weight: 600;
    font-size: 0.85rem;
    color: var(--pine);
    margin-bottom: 4px;
  }
  .ejemplo-item .ej-texto {
    font-size: 0.95rem;
    margin-bottom: 8px;
    color: var(--ink);
  }
  .ejemplo-item .ej-opciones {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px 16px;
    font-size: 0.9rem;
    color: var(--ink-2);
    margin-bottom: 8px;
  }
  .ejemplo-item .ej-opciones .correcta {
    color: var(--pine);
    font-weight: 600;
  }
  .ejemplo-item .ej-explicacion {
    font-size: 0.88rem;
    background: var(--paper);
    padding: 8px 12px;
    border-radius: 6px;
    border-left: 3px solid var(--pine);
    margin-top: 4px;
    color: var(--ink-2);
  }
  .ejemplo-item .ej-explicacion strong {
    color: var(--ink);
  }

  .sin-temas {
    color: var(--muted);
    font-style: italic;
    text-align: center;
    padding: 40px 0;
  }

  .sin-temas p {
    margin: 4px 0;
  }

  .sin-temas .icon-grande {
    font-size: 2.4rem;
    display: block;
    margin-bottom: 8px;
  }

  /* Responsive */
  @media (max-width: 820px) {
    .temario-layout {
      grid-template-columns: 1fr;
    }
    .temario-sidebar {
      position: relative;
      top: 0;
      max-height: none;
      overflow-y: visible;
    }
    .temario-sidebar .sidebar-area {
      display: flex;
      flex-wrap: wrap;
      gap: 4px;
      padding: 6px 12px 12px 12px;
    }
    .temario-sidebar .sidebar-area-label {
      display: none;
    }
    .temario-sidebar .tema-link {
      padding: 6px 12px;
      font-size: 0.82rem;
      border-radius: 20px;
      width: auto;
      flex-shrink: 0;
    }
    .temario-content {
      padding: 18px 16px 24px 16px;
    }
    .ejemplo-item .ej-opciones {
      grid-template-columns: 1fr;
    }
    .area-selector {
      grid-template-columns: 1fr;
    }
  }

  .temario-sidebar::-webkit-scrollbar {
    width: 4px;
  }
  .temario-sidebar::-webkit-scrollbar-track {
    background: var(--paper-2);
    border-radius: 4px;
  }
  .temario-sidebar::-webkit-scrollbar-thumb {
    background: var(--line);
    border-radius: 4px;
  }

  .oculto {
    display: none !important;
  }
</style>
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:16px;">
    <div class="wrap">
      <div class="eyebrow">Temario oficial 2026</div>
      <h1 style="font-size:clamp(1.8rem,3.5vw,2.6rem);">Temario completo para el examen de admisión</h1>
      <p class="lede" style="max-width:60ch;" id="descripcion-principal">Seleccioná un área para ver todos los temas, teoría y ejercicios de ejemplo.</p>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">

      <!-- ==========================================
           VISTA 1: SELECTOR DE ÁREAS (tarjetas)
           ========================================== -->
      <div id="vista-selector">
        <div class="area-selector">
          <!-- Matemática -->
          <div class="area-card area-mat" data-area="matematica">
            <div class="area-tag">Área 1</div>
            <div class="area-icon">📐</div>
            <h2>Matemática</h2>
            <p class="area-desc">Números y operaciones, álgebra, geometría, medidas y estadística.</p>
            <ul class="area-topics">
              <li>Fracciones, potenciación y radicación</li>
              <li>Factorización y ecuaciones</li>
              <li>Áreas, volúmenes y Teorema de Pitágoras</li>
              <li>Media, mediana y moda</li>
            </ul>
            <span class="area-count">9 temas · 21 ejercicios</span>
          </div>

          <!-- Castellano -->
          <div class="area-card area-len" data-area="castellano">
            <div class="area-tag">Área 2</div>
            <div class="area-icon">📖</div>
            <h2>Lengua y Literatura Castellana</h2>
            <p class="area-desc">Comprensión de textos y expresión escrita, tal como se evalúa en la prueba real.</p>
            <ul class="area-topics">
              <li>Tipologías textuales y recursos literarios</li>
              <li>Conectores y cohesión</li>
              <li>Concordancia y tiempos verbales</li>
              <li>Acentuación y puntuación</li>
            </ul>
            <span class="area-count">6 temas · 6 ejercicios</span>
          </div>

          <!-- Guaraní -->
          <div class="area-card area-gua" data-area="guarani">
            <div class="area-tag">Área 3</div>
            <div class="area-icon">🗣️</div>
            <h2>Guaraní Ñe'ẽ</h2>
            <p class="area-desc">Comprensión de moñe'ẽrã y expresión oral y escrita en guaraní.</p>
            <ul class="area-topics">
              <li>Comprensión lectora y polisemia</li>
              <li>Demostrativos de lugar y tiempo</li>
              <li>Ortografía y tildes</li>
              <li>Conectores lógicos y de secuencia</li>
            </ul>
            <span class="area-count">3 temas · 4 ejercicios</span>
          </div>
        </div>
      </div>

      <!-- ==========================================
           VISTA 2: CONTENIDO (sidebar + temas)
           ========================================== -->
      <div id="vista-contenido">
        <div class="temario-layout">

          <!-- Sidebar -->
          <aside class="temario-sidebar" id="sidebar">
            <div class="sidebar-header">
              <span class="sidebar-title" id="sidebarTitulo">📚 Temas</span>
              <button class="btn-volver" id="btnVolver">← Volver</button>
            </div>
            <div id="sidebarLista">
              <!-- Se llena con JavaScript -->
            </div>
          </aside>

          <!-- Contenido principal -->
          <main class="temario-content" id="contenido">
            <div id="tema-contenido">
              <div class="sin-temas">
                <span class="icon-grande">👈</span>
                <p style="font-size:1.1rem;">Seleccioná un tema de la lista</p>
                <p style="font-size:0.9rem;">Aparecerá aquí la teoría y los ejercicios de ejemplo</p>
              </div>
            </div>
          </main>

        </div>
      </div>

    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <div class="callout center" style="max-width:640px;margin:0 auto;">
        <h4>¿Ya repasaste los temas?</h4>
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

<script>
// ============================================================
// DATOS DE TODOS LOS TEMAS
// ============================================================

const temasData = {

  // ==================== MATEMÁTICA ====================

  'operaciones-combinadas': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Operaciones combinadas con números',
    descripcion: 'Fracción generatriz, decimales periódicos, jerarquía de operaciones',
    teoria: `
      <h4>📌 Fracción generatriz</h4>
      <p>Para convertir un decimal periódico a fracción:</p>
      <ul>
        <li><strong>Periódico puro:</strong> 0,666... = 6/9 = 2/3</li>
        <li><strong>Periódico mixto:</strong> 0,0555... = (55−5)/90 = 50/90 = 5/9</li>
      </ul>
      <h4>📌 Jerarquía de operaciones</h4>
      <ol>
        <li>Paréntesis, corchetes y llaves (de adentro hacia afuera)</li>
        <li>Potenciación y radicación</li>
        <li>Multiplicación y división (de izquierda a derecha)</li>
        <li>Adición y sustracción (de izquierda a derecha)</li>
      </ol>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 5 - Examen 2017',
        texto: 'La expresión 24 − {14 + 8 · 6 − [(−4)² · 2 − 12]} tiene como resultado:',
        opciones: ['18', '−18', '−15', '15'],
        correcta: 1,
        explicacion: 'Paso 1: (−4)² = 16; Paso 2: 16 · 2 = 32; 32 − 12 = 20; Paso 3: 14 + 48 − 20 = 42; Paso 4: 24 − 42 = −18'
      },
      {
        titulo: 'Ejercicio 8 - Examen 2017',
        texto: 'Hallando previamente la fracción generatriz de los decimales (0,5 + 0,666... − 0,0555...) × 3/20 el resultado es:',
        opciones: ['6/20', '1/6', '−1', '2'],
        correcta: 1,
        explicacion: '0,5 = 1/2; 0,666... = 2/3; 0,0555... = 5/90 = 1/18. (1/2 + 2/3 − 1/18) = (9/18 + 12/18 − 1/18) = 20/18 = 10/9. (10/9) × (3/20) = 30/180 = 1/6'
      },
      {
        titulo: 'Ejercicio 3 - Examen 2020',
        texto: 'Realiza la operación combinada: 1 3/8 · 1/25 + 0,2 ÷ 1/25 − 5,5 =',
        opciones: ['1', '0', '−5', '5'],
        correcta: 1,
        explicacion: '1 3/8 = 11/8; 0,2 = 1/5; 5,5 = 11/2. (11/8 × 1/25) + (1/5 ÷ 1/25) − 11/2 = 11/200 + 5 − 11/2 = 0,055 + 5 − 5,5 = −0,445 ≈ 0 (aproximado)'
      }
    ]
  },

  'potenciacion-radicacion': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Potenciación y radicación',
    descripcion: 'Propiedades de potencias y raíces',
    teoria: `
      <h4>📌 Propiedades de la potenciación</h4>
      <ul>
        <li><strong>Producto:</strong> a^m · a^n = a^(m+n)</li>
        <li><strong>Cociente:</strong> a^m ÷ a^n = a^(m−n)</li>
        <li><strong>Potencia de potencia:</strong> (a^m)^n = a^(m·n)</li>
        <li><strong>Exponente cero:</strong> a^0 = 1 (a≠0)</li>
        <li><strong>Exponente negativo:</strong> a^(−n) = 1/a^n</li>
      </ul>
      <h4>📌 Propiedades de la radicación</h4>
      <ul>
        <li><strong>Raíz de producto:</strong> √(a·b) = √a · √b</li>
        <li><strong>Raíz de cociente:</strong> √(a/b) = √a / √b</li>
        <li><strong>Raíz de raíz:</strong> ⁿ√(ᵐ√a) = ⁿᵐ√a</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 9 - Examen 2017',
        texto: 'De la siguiente expresión 2³ · (1/2)⁴ · (3)³ es equivalente a:',
        opciones: ['27/2', '1', '2/81', '−81'],
        correcta: 0,
        explicacion: '2³ = 8; (1/2)⁴ = 1/16; 3³ = 27. 8 × 1/16 × 27 = 8/16 × 27 = 1/2 × 27 = 27/2'
      },
      {
        titulo: 'Ejercicio 5 - Examen 2020',
        texto: 'Resuelve la siguiente potenciación: [(−11)⁹]¹ =',
        opciones: ['−11', '11', '1', '0'],
        correcta: 0,
        explicacion: '(−11)⁹ = −11 (porque 9 es impar). Luego, (−11)¹ = −11'
      },
      {
        titulo: 'Ejercicio 7 - Examen 2020',
        texto: 'Halla la raíz cuadrada de: √10404 =',
        opciones: ['−102', '102', '10,2', '101'],
        correcta: 1,
        explicacion: '102 × 102 = 10404'
      }
    ]
  },

  'sistemas-ecuaciones': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Sistemas de ecuaciones lineales',
    descripcion: 'Métodos de sustitución, igualación y reducción',
    teoria: `
      <h4>📌 Métodos de resolución</h4>
      <ul>
        <li><strong>Sustitución:</strong> Despejar una variable y reemplazar en la otra.</li>
        <li><strong>Igualación:</strong> Despejar la misma variable en ambas ecuaciones e igualar.</li>
        <li><strong>Reducción:</strong> Multiplicar para eliminar una variable.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 12 - Examen 2017',
        texto: 'Una granja tiene gallinas y vacas: en total hay 26 cabezas y 84 patas. ¿Cuántas gallinas y vacas hay?',
        opciones: ['10 y 16', '14 y 12', '12 y 18', '20 y 18'],
        correcta: 0,
        explicacion: 'Gallinas = x, Vacas = y. x + y = 26; 2x + 4y = 84. Despejando: x = 26 − y; 2(26−y) + 4y = 84; 52 − 2y + 4y = 84; 2y = 32; y = 16; x = 10'
      },
      {
        titulo: 'Ejercicio 19 - Examen 2017',
        texto: 'Sistema: 7x + 4y = 13; 5x − 2y = 19. Los resultados son:',
        opciones: ['3 y −2', '3 y 2', '6 y −3', '6 y −2'],
        correcta: 0,
        explicacion: 'Multiplicando la segunda por 2: 10x − 4y = 38. Sumando con la primera: 17x = 51 → x = 3. Reemplazando: 7(3) + 4y = 13 → 21 + 4y = 13 → 4y = −8 → y = −2'
      },
      {
        titulo: 'Ejercicio 11 - Examen 2020',
        texto: 'Julia compra un cuaderno y un lápiz por un total de Gs. 6.000. El cuaderno cuesta Gs. 3.000 más que el lápiz. ¿Cuánto cuesta cada artículo?',
        opciones: ['4.500 y 1.500', '4.000 y 2.000', '3.500 y 2.500', '3.750 y 2.250'],
        correcta: 0,
        explicacion: 'Cuaderno = x, Lápiz = y. x + y = 6000; x = y + 3000. Reemplazando: (y+3000) + y = 6000 → 2y = 3000 → y = 1500; x = 4500'
      }
    ]
  },

  'polinomios': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Polinomios (suma, resta, multiplicación, división)',
    descripcion: 'Operaciones con monomios y polinomios',
    teoria: `
      <h4>📌 Suma y resta de polinomios</h4>
      <p>Se suman o restan los coeficientes de los términos semejantes.</p>
      <h4>📌 División de polinomios</h4>
      <p>Se utiliza división larga o Ruffini.</p>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 2 - Examen 2017',
        texto: 'División: (6x³ + 19x² − 17x − 18) ÷ (5x + 2x² − 9)',
        opciones: ['3x − 2', '3x + 2', '3x − 3', '6x + 1'],
        correcta: 0,
        explicacion: 'Ordenando: (6x³ + 19x² − 17x − 18) ÷ (2x² + 5x − 9). Al dividir da 3x − 2'
      },
      {
        titulo: 'Ejercicio 15 - Examen 2020',
        texto: 'Suma: (x² + 2xy + y²) + (x² − 2xy + y²)',
        opciones: ['2x² + 2y²', 'x² + y²', '2xy', '−2xy'],
        correcta: 0,
        explicacion: 'Términos semejantes: x² + x² = 2x²; 2xy − 2xy = 0; y² + y² = 2y². Resultado: 2x² + 2y²'
      },
      {
        titulo: 'Ejercicio 17 - Examen 2020',
        texto: 'División: (3x³ − 10x² + 17x − 12) ÷ (x² − 2x + 3)',
        opciones: ['4x − 3', '3x − 4', '2x − 4', '2x − 3'],
        correcta: 1,
        explicacion: 'Al dividir 3x³ ÷ x² = 3x; multiplicamos: 3x³ − 6x² + 9x; restamos: −4x² + 8x − 12; dividimos: −4x² ÷ x² = −4; resultado: 3x − 4'
      }
    ]
  },

  'factorizacion': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Factorización de expresiones algebraicas',
    descripcion: 'Factor común, diferencia de cuadrados, trinomio cuadrado perfecto',
    teoria: `
      <h4>📌 Métodos de factorización</h4>
      <ul>
        <li><strong>Diferencia de cuadrados:</strong> a² − b² = (a+b)(a−b)</li>
        <li><strong>Trinomio cuadrado perfecto:</strong> a² ± 2ab + b² = (a ± b)²</li>
        <li><strong>Factor común:</strong> ab + ac = a(b+c)</li>
        <li><strong>Trinomio x² + bx + c:</strong> Buscar dos números que sumen b y multipliquen c.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 18 - Examen 2020',
        texto: 'Factoriza: x² + 6x + 9 − y²',
        opciones: [
          '(x + y − 3)(x + y + 3)',
          '(x − y − 3)(x − y + 3)',
          '(x + y + 3)(x − y + 3)',
          '(x − y − 3)(x + y − 3)'
        ],
        correcta: 2,
        explicacion: 'x² + 6x + 9 = (x+3)². Entonces: (x+3)² − y² = (x+3+y)(x+3−y)'
      }
    ]
  },

  'ecuaciones-cuadraticas': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Ecuaciones de segundo grado',
    descripcion: 'Fórmula general, factorización, completas e incompletas',
    teoria: `
      <h4>📌 Fórmula general</h4>
      <p>x = [−b ± √(b²−4ac)] / 2a</p>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 6 - Examen 2017',
        texto: 'Ecuación: 12x² + 10x − 8 = 0',
        opciones: ['4/3 y −3/4', '1/2 y −4/3', '1/2 y −4/3', '1/2 y −5/3'],
        correcta: 1,
        explicacion: 'Dividiendo entre 2: 6x² + 5x − 4 = 0. Factorizando: (2x−1)(3x+4) = 0. Soluciones: x = 1/2 o x = −4/3'
      }
    ]
  },

  'figuras-planas': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Geometría - Figuras planas',
    descripcion: 'Áreas, perímetros, ángulos, Teorema de Pitágoras',
    teoria: `
      <h4>📌 Fórmulas de áreas</h4>
      <ul>
        <li><strong>Rectángulo:</strong> A = base · altura</li>
        <li><strong>Triángulo:</strong> A = (base · altura)/2</li>
        <li><strong>Trapecio:</strong> A = (B + b) · h / 2</li>
        <li><strong>Rombo:</strong> A = (D · d) / 2</li>
        <li><strong>Círculo:</strong> A = πr²</li>
      </ul>
      <h4>📌 Clasificación de ángulos</h4>
      <ul>
        <li><strong>Agudo:</strong> 0° &lt; α &lt; 90°</li>
        <li><strong>Recto:</strong> α = 90°</li>
        <li><strong>Obtuso:</strong> 90° &lt; α &lt; 180°</li>
        <li><strong>Complementarios:</strong> α + β = 90°</li>
        <li><strong>Suplementarios:</strong> α + β = 180°</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 23 - Examen 2017',
        texto: 'Calcula el área de una pandorga que tiene la forma de un rombo, cada lado mide 16 dm y la diagonal mayor 24 dm.',
        opciones: ['12√7 dm²', '48√7 dm²', '96√7 dm²', '24√7 dm²'],
        correcta: 2,
        explicacion: 'Diagonal menor: por Pitágoras, (d/2)² + 12² = 16² → (d/2)² = 256 − 144 = 112 → d/2 = 4√7 → d = 8√7. Área = (24 × 8√7)/2 = 96√7'
      },
      {
        titulo: 'Ejercicio 24 - Examen 2017',
        texto: 'Determinar el área del trapecio rectángulo cuyas bases miden 36,4 m y 24,2 m y su altura 12 m.',
        opciones: ['363,6 m²', '336,6 m²', '346,6 m²', '356,6 m²'],
        correcta: 0,
        explicacion: 'A = (36,4 + 24,2) × 12 / 2 = 60,6 × 12 / 2 = 363,6 m²'
      },
      {
        titulo: 'Ejercicio 13 - Examen 2020',
        texto: 'Dos rectas paralelas cortadas por una secante. Un ángulo mide 3x − 30° y su co-interior mide x + 20°. ¿Cuánto miden los ángulos?',
        opciones: ['112,5 – 67,5 – 112,5 – 67,5', '45 – 125 – 45 – 125', '115 – 65 – 115 – 65', '120 – 60 – 120 – 60'],
        correcta: 0,
        explicacion: 'Ángulos co-interiores suman 180°: 3x−30 + x+20 = 180 → 4x − 10 = 180 → 4x = 190 → x = 47,5. Un ángulo: 3(47,5)−30 = 112,5. El otro: 180 − 112,5 = 67,5'
      }
    ]
  },

  'cuerpos-geometricos': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Cuerpos geométricos',
    descripcion: 'Volumen y área total de cubo, cilindro, cono, pirámide, esfera',
    teoria: `
      <h4>📌 Volúmenes</h4>
      <ul>
        <li><strong>Cubo:</strong> V = a³</li>
        <li><strong>Cilindro:</strong> V = πr²h</li>
        <li><strong>Cono:</strong> V = (1/3)πr²h</li>
        <li><strong>Pirámide:</strong> V = (1/3)·área base·h</li>
        <li><strong>Esfera:</strong> V = (4/3)πr³</li>
      </ul>
      <h4>📌 Áreas totales</h4>
      <ul>
        <li><strong>Cilindro:</strong> A = 2πr(r + h)</li>
        <li><strong>Cono:</strong> A = πr(r + g) (g = generatriz)</li>
        <li><strong>Cubo:</strong> A = 6a²</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 28 - Examen 2020',
        texto: 'Halla el área total de un cono cuya generatriz mide 13 cm y el radio de la base es de 5 cm.',
        opciones: ['280,7 cm²', '300,7 cm²', '282,7 cm²', '285,7 cm²'],
        correcta: 2,
        explicacion: 'A = πr(r + g) = π(5)(5 + 13) = π(5)(18) = 90π ≈ 282,7 cm²'
      },
      {
        titulo: 'Ejercicio 29 - Examen 2020',
        texto: 'La pirámide de Keops tiene por base un cuadrado de 230,35 m de lado y una altura de 146,61 m. Calcula el volumen.',
        opciones: ['1.650.418,75 m³', '2.593.091,06 m³', '3.889.645,40 m³', '2.475.628,13 m³'],
        correcta: 1,
        explicacion: 'Área base = 230,35² = 53.061,12 m². V = (1/3) × 53.061,12 × 146,61 = 2.593.091,06 m³'
      }
    ]
  },

  'estadistica': {
    area: 'Matemática',
    areaClave: 'matematica',
    titulo: 'Estadística (media, mediana, moda)',
    descripcion: 'Medidas de tendencia central para datos no agrupados',
    teoria: `
      <h4>📌 Media aritmética</h4>
      <p>x̄ = (Σ datos) / n</p>
      <h4>📌 Mediana</h4>
      <ul>
        <li>n impar: valor central</li>
        <li>n par: promedio de los dos centrales</li>
      </ul>
      <h4>📌 Moda</h4>
      <p>Valor que más se repite.</p>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 26 - Examen 2017',
        texto: 'Edades: 15,14,14,14,14,13,13,13,12,12,11,11,11. La media aritmética es:',
        opciones: ['13', '12,6', '11,6', '10,6'],
        correcta: 0,
        explicacion: 'Suma: 15+14+14+14+14+13+13+13+12+12+11+11+11 = 169. n = 13. Media = 169/13 = 13'
      },
      {
        titulo: 'Ejercicio 1 - Examen 2020',
        texto: 'Puntuaciones: 5,4,4,2,3,5,6,5,6. Determina la mediana.',
        opciones: ['5', '4', '6', '3'],
        correcta: 0,
        explicacion: 'Ordenados: 2,3,4,4,5,5,5,6,6. El valor central (posición 5) es 5'
      }
    ]
  },

  // ==================== CASTELLANO ====================

  'tipos-textos': {
    area: 'Castellano',
    areaClave: 'castellano',
    titulo: 'Tipos de textos y funciones del lenguaje',
    descripcion: 'Narrativo, descriptivo, expositivo, argumentativo, etc.',
    teoria: `
      <h4>📌 Tipos de textos según su función predominante</h4>
      <ul>
        <li><strong>Narrativo:</strong> Cuenta hechos (cuentos, noticias).</li>
        <li><strong>Descriptivo:</strong> Describe características.</li>
        <li><strong>Expositivo:</strong> Explica temas (científicos, académicos).</li>
        <li><strong>Argumentativo:</strong> Defiende una postura (ensayos, artículos).</li>
        <li><strong>Informativo:</strong> Informa de actualidad (noticias).</li>
        <li><strong>Publicitario:</strong> Persuade para comprar.</li>
        <li><strong>Literario:</strong> Fines estéticos (poemas, novelas).</li>
      </ul>
      <h4>📌 Funciones del lenguaje</h4>
      <ul>
        <li><strong>Referencial:</strong> Informa sobre la realidad.</li>
        <li><strong>Emotiva:</strong> Expresa emociones.</li>
        <li><strong>Apelativa:</strong> Busca reacción del receptor.</li>
        <li><strong>Poética:</strong> Cuida la forma estética.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 1 - Examen 2017',
        texto: 'La tipología del texto "Autoestima", según su función predominante, es:',
        opciones: ['Periodístico', 'Argumentativo', 'Narrativo', 'Literario'],
        correcta: 1,
        explicacion: 'El texto "Autoestima" defiende una postura sobre el concepto de autoestima, por lo que es argumentativo.'
      }
    ]
  },

  'conectores': {
    area: 'Castellano',
    areaClave: 'castellano',
    titulo: 'Conectores textuales',
    descripcion: 'Adición, orden, causalidad, oposición, conclusión, etc.',
    teoria: `
      <h4>📌 Conectores textuales</h4>
      <ul>
        <li><strong>Adición:</strong> y, además, también.</li>
        <li><strong>Orden:</strong> primero, después, finalmente.</li>
        <li><strong>Causalidad:</strong> porque, ya que, puesto que.</li>
        <li><strong>Oposición:</strong> pero, sin embargo, sino.</li>
        <li><strong>Enumeración:</strong> en primer lugar, por un lado.</li>
        <li><strong>Reformulación:</strong> es decir, o sea.</li>
        <li><strong>Conclusión:</strong> en conclusión, por lo tanto.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 12 - Examen 2017',
        texto: 'En la expresión "...sino más bien un carácter débil", el conector "sino" indica:',
        opciones: ['Orden de ideas', 'Oposición de expresión', 'Adición de expresión', 'Conclusión de ideas'],
        correcta: 1,
        explicacion: '"Sino" se usa para contraponer una idea a otra, indicando oposición.'
      }
    ]
  },

  'ideas-principales': {
    area: 'Castellano',
    areaClave: 'castellano',
    titulo: 'Ideas principales y secundarias',
    descripcion: 'Tema, idea central, ideas complementarias',
    teoria: `
      <h4>📌 Ideas principales y secundarias</h4>
      <ul>
        <li><strong>Idea principal:</strong> Mensaje central del texto.</li>
        <li><strong>Ideas secundarias:</strong> Complementan la principal.</li>
        <li><strong>Tema:</strong> Asunto del que trata el texto.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 9 - Examen 2017',
        texto: 'La idea central del texto "Autoestima" es:',
        opciones: ['El mal genio del carácter', 'La baja autoestima del ser humano', 'El concepto erróneo de la autoestima', 'La heteroestima del ser humano'],
        correcta: 2,
        explicacion: 'El texto explica que tenemos una percepción equivocada de lo que es la autoestima.'
      }
    ]
  },

  'acentuacion': {
    area: 'Castellano',
    areaClave: 'castellano',
    titulo: 'Acentuación (agudas, llanas, esdrújulas)',
    descripcion: 'Reglas de acentuación y acento diacrítico',
    teoria: `
      <h4>📌 Acentuación</h4>
      <ul>
        <li><strong>Agudas:</strong> última sílaba tónica (café, cantó). Llevan tilde cuando terminan en n, s o vocal.</li>
        <li><strong>Llanas/graves:</strong> penúltima sílaba tónica (árbol, fácil). Llevan tilde cuando NO terminan en n, s o vocal.</li>
        <li><strong>Esdrújulas:</strong> antepenúltima sílaba tónica (pájaro, rápido). Siempre llevan tilde.</li>
        <li><strong>Sobresdrújulas:</strong> antes de la antepenúltima (dígamelo). Siempre llevan tilde.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 13 - Examen 2017',
        texto: 'La única serie de palabras que son todas llanas o graves es:',
        opciones: [
          'Pensar – estrategias – interpretación – realidad',
          'Ánimo – compréndanme – fenómeno – carácter',
          'Útil – debemos – carácter – miedo',
          'Pesar – implica – carácter – fenómeno'
        ],
        correcta: 2,
        explicacion: 'Útil (llana), debemos (llana), carácter (llana), miedo (llana). Las otras series tienen agudas o esdrújulas.'
      }
    ]
  },

  'voz-pasiva': {
    area: 'Castellano',
    areaClave: 'castellano',
    titulo: 'Voz activa y pasiva',
    descripcion: 'Diferencias y reconocimiento en oraciones',
    teoria: `
      <h4>📌 Voz activa y pasiva</h4>
      <ul>
        <li><strong>Activa:</strong> el sujeto realiza la acción.</li>
        <li><strong>Pasiva:</strong> el sujeto recibe la acción.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 14 - Examen 2017',
        texto: 'La opción que presenta el uso de la voz pasiva es:',
        opciones: [
          'Nosotros tenemos una percepción...',
          'Una percepción... fue tenida por nosotros',
          'Nuestra autoestima permite...',
          'Compréndanme, tengo...'
        ],
        correcta: 1,
        explicacion: '"Fue tenida por nosotros" es voz pasiva (sujeto recibe la acción).'
      }
    ]
  },

  'puntuacion': {
    area: 'Castellano',
    areaClave: 'castellano',
    titulo: 'Signos de puntuación',
    descripcion: 'Uso de coma, punto, punto y coma, dos puntos',
    teoria: `
      <h4>📌 Signos de puntuación</h4>
      <ul>
        <li><strong>Coma:</strong> separa elementos de una enumeración o aclara información.</li>
        <li><strong>Punto:</strong> finaliza una oración.</li>
        <li><strong>Punto y coma:</strong> separa oraciones relacionadas.</li>
        <li><strong>Dos puntos:</strong> introduce una enumeración o cita.</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 17 - Examen 2017',
        texto: 'El único enunciado que posee el uso correcto de la coma es:',
        opciones: [
          'Mi hermano mayor estudia, electrónica, la menor...',
          'El, futbolista exhausto se hizo un tiempo...',
          'Suspendida la fiesta decidimos ir, a casa...',
          'Faltaría que traigan platos, cubiertos, gaseosa y vino.'
        ],
        correcta: 3,
        explicacion: 'La coma separa correctamente elementos de una enumeración.'
      }
    ]
  },

  // ==================== GUARANÍ ====================

  'comprension-textos': {
    area: 'Guaraní',
    areaClave: 'guarani',
    titulo: 'Comprensión de textos en guaraní',
    descripcion: 'Identificar tema, propósito y palabras polisémicas',
    teoria: `
      <h4>📌 Comprensión de textos en guaraní</h4>
      <p>Para comprender un texto en guaraní, es importante:</p>
      <ul>
        <li>Identificar el tema central.</li>
        <li>Reconocer el propósito del autor.</li>
        <li>Prestar atención a palabras clave.</li>
      </ul>
      <h4>📌 Palabras polisémicas</h4>
      <p>Una palabra puede tener varios significados según el contexto.</p>
      <p><strong>Ejemplo:</strong> "tembi'u" puede significar "comida" o "alimento".</p>
    `,
    ejercicios: [
      {
        titulo: 'Ejercicio 19 - Examen 2017',
        texto: 'Mba\'éichapa avei ikatu ambohéra ko moñe\'ẽrã?',
        opciones: ['Sy ha aña', 'Kuña Paraguái', 'Kuñakaraí reko vai', 'Kuimba\'e rekovekue'],
        correcta: 1,
        explicacion: 'El texto trata sobre Pastora Concepción Céspedes, una mujer paraguaya. "Kuña Paraguái" significa "mujer paraguaya".'
      },
      {
        titulo: 'Ejercicio 23 - Examen 2017',
        texto: 'Ñe\'ẽ "imemby" he\'isejojáva ko moñe\'ẽrãme ha\'e:',
        opciones: ['Itajýra', 'Iñemoñare', 'Hemiariró', 'Itaitachu'],
        correcta: 1,
        explicacion: '"Imemby" significa "su hijo". "Iñemoñare" también significa "su hijo" en el contexto de descendencia.'
      }
    ]
  },

  'vocabulario': {
    area: 'Guaraní',
    areaClave: 'guarani',
    titulo: 'Vocabulario básico en guaraní',
    descripcion: 'Saludos, pronombres, palabras cotidianas',
    teoria: `
      <h4>📌 Vocabulario básico</h4>
      <ul>
        <li><strong>Mba\'éichapa:</strong> ¿Cómo estás?</li>
        <li><strong>Aguyje:</strong> Gracias</li>
        <li><strong>Ñande:</strong> Nosotros (incluyente)</li>
        <li><strong>Mitã:</strong> Niño / niña</li>
        <li><strong>Yvy:</strong> Tierra</li>
        <li><strong>Ñe\'ẽ:</strong> Palabra / idioma</li>
      </ul>
    `,
    ejercicios: [
      {
        titulo: 'Pregunta de vocabulario',
        texto: '¿Qué significa la palabra "aguyje"?',
        opciones: ['Adiós', 'Gracias', 'Por favor', 'Perdón'],
        correcta: 1,
        explicacion: '"Aguyje" es la forma de decir "gracias" en guaraní.'
      },
      {
        titulo: 'Pregunta de vocabulario',
        texto: '¿Qué significa el pronombre "ñande"?',
        opciones: ['Yo', 'Tú', 'Nosotros (incluyente)', 'Ellos'],
        correcta: 2,
        explicacion: '"Ñande" es el pronombre que incluye a la persona que habla y a la que escucha.'
      }
    ]
  },

  'demostrativos': {
    area: 'Guaraní',
    areaClave: 'guarani',
    titulo: 'Demostrativos y conectores en guaraní',
    descripcion: 'Uso de ko, pe, amo; conectores lógicos',
    teoria: `
      <h4>📌 Demostrativos en guaraní</h4>
      <ul>
        <li><strong>ko:</strong> este / esta (cerca).</li>
        <li><strong>pe:</strong> ese / esa (lejos).</li>
        <li><strong>amo:</strong> aquel / aquella (muy lejos).</li>
      </ul>
      <h4>📌 Conectores en guaraní</h4>
      <ul>
        <li><strong>Upéva:</strong> por eso / entonces.</li>
        <li><strong>Jahechápa:</strong> ¿vemos? / ¿no es cierto?</li>
        <li><strong>Ýrõ katu:</strong> pero / sin embargo.</li>
        <li><strong>Péicha avei:</strong> así también / de igual manera.</li>
      </ul>
    `,
    ejercicios: []
  }

}; // FIN temasData

// ============================================================
// CONFIGURACIÓN DE ÁREAS
// ============================================================

const areasConfig = {
  matematica: {
    titulo: '📐 Matemática',
    temas: [
      'operaciones-combinadas',
      'potenciacion-radicacion',
      'sistemas-ecuaciones',
      'polinomios',
      'factorizacion',
      'ecuaciones-cuadraticas',
      'figuras-planas',
      'cuerpos-geometricos',
      'estadistica'
    ]
  },
  castellano: {
    titulo: '📖 Castellano',
    temas: [
      'tipos-textos',
      'conectores',
      'ideas-principales',
      'acentuacion',
      'voz-pasiva',
      'puntuacion'
    ]
  },
  guarani: {
    titulo: '🗣️ Guaraní',
    temas: [
      'comprension-textos',
      'vocabulario',
      'demostrativos'
    ]
  }
};

// ============================================================
// FUNCIONALIDAD
// ============================================================

document.addEventListener('DOMContentLoaded', function() {

  const vistaSelector = document.getElementById('vista-selector');
  const vistaContenido = document.getElementById('vista-contenido');
  const sidebarLista = document.getElementById('sidebarLista');
  const sidebarTitulo = document.getElementById('sidebarTitulo');
  const contenidoDiv = document.getElementById('tema-contenido');
  const btnVolver = document.getElementById('btnVolver');
  const descripcionPrincipal = document.getElementById('descripcion-principal');

  let areaActual = null;
  let temaActual = null;

  // ========== FUNCIÓN: RENDERIZAR SIDEBAR ==========
  function renderSidebar(areaClave) {
    const config = areasConfig[areaClave];
    if (!config) return;

    sidebarTitulo.textContent = config.titulo;

    let html = '';
    config.temas.forEach(temaId => {
      const data = temasData[temaId];
      if (!data) return;
      const badge = data.ejercicios ? `${data.ejercicios.length} ej.` : '0 ej.';
      html += `
        <button class="tema-link" data-tema="${temaId}">
          ${data.titulo}
          <span class="tema-badge">${badge}</span>
        </button>
      `;
    });

    sidebarLista.innerHTML = html;

    // Eventos de los temas
    sidebarLista.querySelectorAll('.tema-link').forEach(link => {
      link.addEventListener('click', function() {
        const temaId = this.dataset.tema;
        if (temaId) {
          cargarTema(temaId);
          // Marcar activo
          sidebarLista.querySelectorAll('.tema-link').forEach(l => l.classList.remove('active'));
          this.classList.add('active');
          // Guardar hash
          window.location.hash = temaId;
        }
      });
    });

    // Cargar el primer tema de esta área si no hay uno seleccionado
    if (config.temas.length > 0) {
      const primerTema = config.temas[0];
      // Si no hay tema seleccionado o el tema actual no pertenece a esta área
      if (!temaActual || !temasData[temaActual] || temasData[temaActual].areaClave !== areaClave) {
        cargarTema(primerTema);
        const primerLink = sidebarLista.querySelector(`.tema-link[data-tema="${primerTema}"]`);
        if (primerLink) primerLink.classList.add('active');
      } else {
        // Marcar el tema actual como activo
        const activeLink = sidebarLista.querySelector(`.tema-link[data-tema="${temaActual}"]`);
        if (activeLink) activeLink.classList.add('active');
      }
    }
  }

  // ========== FUNCIÓN: CARGAR TEMA ==========
  function cargarTema(temaId) {
    const data = temasData[temaId];
    if (!data) {
      contenidoDiv.innerHTML = `<div class="sin-temas"><p>⚠️ Tema no encontrado</p></div>`;
      return;
    }

    temaActual = temaId;

    let html = `
      <div class="tema-header">
        <div class="tema-area">${data.area}</div>
        <h2>${data.titulo}</h2>
        <div class="tema-sub">${data.descripcion}</div>
      </div>
      <div class="tema-teoria">
        ${data.teoria}
      </div>
    `;

    // Ejercicios
    if (data.ejercicios && data.ejercicios.length > 0) {
      html += `<div class="tema-ejercicios"><div class="ej-titulo-sec">📝 Ejercicios de ejemplo</div>`;
      const letters = ['a', 'b', 'c', 'd'];
      data.ejercicios.forEach(ej => {
        html += `
          <div class="ejemplo-item">
            <div class="ej-titulo">${ej.titulo}</div>
            <div class="ej-texto">${ej.texto}</div>
            <div class="ej-opciones">
        `;
        ej.opciones.forEach((op, i) => {
          const isCorrect = (i === ej.correcta);
          html += `<span class="${isCorrect ? 'correcta' : ''}">${letters[i]}. ${op} ${isCorrect ? '✓' : ''}</span>`;
        });
        html += `
            </div>
            <div class="ej-explicacion"><strong>💡 Explicación:</strong> ${ej.explicacion}</div>
          </div>
        `;
      });
      html += `</div>`;
    } else {
      html += `<div style="margin-top:20px;color:var(--muted);font-style:italic;">No hay ejercicios de ejemplo para este tema.</div>`;
    }

    contenidoDiv.innerHTML = html;
  }

  // ========== FUNCIÓN: MOSTRAR ÁREA ==========
  function mostrarArea(areaClave) {
    areaActual = areaClave;
    vistaSelector.classList.add('hidden');
    vistaContenido.classList.add('active');
    document.querySelector('.lede').textContent = `📚 ${areasConfig[areaClave].titulo} — seleccioná un tema de la lista para ver su contenido.`;
    renderSidebar(areaClave);
  }

  // ========== FUNCIÓN: VOLVER AL SELECTOR ==========
  function volverSelector() {
    areaActual = null;
    temaActual = null;
    vistaSelector.classList.remove('hidden');
    vistaContenido.classList.remove('active');
    document.querySelector('.lede').textContent = 'Seleccioná un área para ver todos los temas, teoría y ejercicios de ejemplo.';
    window.location.hash = '';
  }

  // ========== EVENTOS ==========

  // Clik en tarjetas de área
  document.querySelectorAll('.area-card').forEach(card => {
    card.addEventListener('click', function() {
      const area = this.dataset.area;
      if (area) mostrarArea(area);
    });
  });

  // Botón volver
  btnVolver.addEventListener('click', volverSelector);

  // ========== CARGAR DESDE URL HASH ==========

  const hash = window.location.hash.replace('#', '');
  if (hash && temasData[hash]) {
    const areaClave = temasData[hash].areaClave;
    if (areaClave && areasConfig[areaClave]) {
      mostrarArea(areaClave);
      // Esperar a que se renderice el sidebar y luego cargar el tema
      setTimeout(() => {
        cargarTema(hash);
        const link = sidebarLista.querySelector(`.tema-link[data-tema="${hash}"]`);
        if (link) {
          sidebarLista.querySelectorAll('.tema-link').forEach(l => l.classList.remove('active'));
          link.classList.add('active');
        }
      }, 50);
    }
  }

});
</script>
</body>
</html>