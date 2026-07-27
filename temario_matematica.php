<?php $active = 'temario'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Matemática — Temario | APY | 1</title>
<link rel="stylesheet" href="css/style.css">
<style>
  /* Estilos para el temario */
  .cap-toggle {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    background: var(--paper-2);
    border: 1px solid var(--line);
    border-radius: 8px;
    padding: 12px 16px;
    font-size: inherit;
    font-family: inherit;
    text-align: left;
    cursor: pointer;
    color: var(--ink);
    transition: background 0.2s, border-color 0.2s;
    margin-bottom: 0;
  }
  .cap-toggle:hover {
    background: var(--paper-3);
    border-color: var(--muted);
  }
  .cap-toggle .cap-title {
    font-weight: 600;
    font-size: 0.98rem;
    flex: 1;
  }
  .cap-toggle .cap-badge {
    font-size: 0.75rem;
    background: var(--line);
    color: var(--ink-2);
    padding: 2px 10px;
    border-radius: 20px;
    margin-right: 12px;
  }
  .cap-toggle .cap-chev {
    font-size: 0.8rem;
    color: var(--muted);
    transition: transform 0.3s ease;
  }
  .capacidad.open .cap-toggle {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-color: #2d6a4f;
    background: var(--paper-3);
  }
  .capacidad.open .cap-toggle .cap-chev {
    transform: rotate(180deg);
  }
  .cap-body {
    display: none;
    padding: 16px 18px 20px 18px;
    border: 1px solid var(--line);
    border-top: none;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    background: var(--paper);
    margin-bottom: 6px;
  }
  .capacidad.open .cap-body {
    display: block;
  }
  .cap-temas {
    margin: 0 0 12px 0;
    padding-left: 20px;
    font-size: 0.92rem;
    color: var(--ink-2);
  }
  .cap-temas li {
    margin-bottom: 3px;
  }
  .cap-teoria {
    background: var(--paper-2);
    border-radius: 8px;
    padding: 14px 18px;
    margin-top: 8px;
    font-size: 0.94rem;
    line-height: 1.65;
    border: 1px solid var(--line-soft);
  }
  .cap-teoria h4 {
    margin: 12px 0 6px 0;
    font-size: 1rem;
    color: var(--ink);
  }
  .cap-teoria h4:first-child {
    margin-top: 0;
  }
  .cap-teoria ul, .cap-teoria ol {
    padding-left: 22px;
    margin: 6px 0 10px 0;
  }
  .cap-teoria li {
    margin-bottom: 4px;
  }
  .cap-teoria p {
    margin: 6px 0;
  }
  .cap-teoria strong {
    color: var(--ink);
  }
  .ejemplos-list {
    margin-top: 14px;
  }
  .ejemplo-item {
    background: var(--paper);
    border: 1px solid var(--line-soft);
    border-radius: 8px;
    padding: 14px 16px;
    margin-bottom: 10px;
    transition: border-color 0.2s;
  }
  .ejemplo-item:hover {
    border-color: var(--muted);
  }
  .ejemplo-item .ej-titulo {
    font-weight: 600;
    font-size: 0.88rem;
    color: #2d6a4f;
    margin-bottom: 4px;
  }
  .ejemplo-item .ej-texto {
    font-size: 0.94rem;
    margin-bottom: 8px;
    color: var(--ink);
  }
  .ejemplo-item .ej-opciones {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4px 16px;
    font-size: 0.9rem;
    color: var(--ink-2);
    margin-bottom: 8px;
  }
  .ejemplo-item .ej-opciones .correcta {
    color: #2d6a4f;
    font-weight: 600;
  }
  .ejemplo-item .ej-explicacion {
    font-size: 0.88rem;
    background: var(--paper-2);
    padding: 8px 12px;
    border-radius: 6px;
    border-left: 3px solid #2d6a4f;
    margin-top: 4px;
    color: var(--ink-2);
  }
  .ejemplo-item .ej-explicacion strong {
    color: var(--ink);
  }
  .area-block .capacidad {
    margin-bottom: 8px;
  }
  .area-mat .area-toggle .idx {
    background: #2d6a4f;
  }
  .back-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--ink-2);
    text-decoration: none;
    font-size: 0.9rem;
    margin-bottom: 16px;
    padding: 6px 12px;
    border-radius: 6px;
    background: var(--paper-2);
    transition: background 0.2s;
  }
  .back-link:hover {
    background: var(--paper-3);
    color: var(--ink);
  }
  .area-header {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 20px;
  }
  .area-header .icon {
    font-size: 2.4rem;
  }
  .area-header h1 {
    margin: 0;
    font-size: clamp(1.8rem, 3vw, 2.4rem);
  }
  .area-header .badge {
    font-size: 0.8rem;
    background: #2d6a4f;
    color: white;
    padding: 2px 14px;
    border-radius: 20px;
    font-weight: 500;
  }
  .cap-badge-ej {
    font-size: 0.7rem;
    background: #e6f0ea;
    color: #2d6a4f;
    padding: 1px 10px;
    border-radius: 20px;
    margin-right: 10px;
    font-weight: 500;
  }
</style>
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:20px;">
    <div class="wrap">
      <a href="temario.php" class="back-link">← Volver al temario</a>
      <div class="area-header">
        <span class="icon">📐</span>
        <h1>Matemática</h1>
        <span class="badge">16 temas</span>
      </div>
      <p class="lede" style="max-width:60ch;">Números, álgebra, geometría, estadística — hacé clic en cada capacidad para ver la teoría y ejercicios de ejemplo.</p>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <!-- BLOQUE 1: Números y Operaciones Básicas -->
      <div class="area-block area-mat" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 1</span>Números y Operaciones Básicas</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <!-- Capacidad 1 -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Operar con números enteros y racionales (fracciones y decimales)</span>
                <span class="cap-badge">5 temas</span>
                <span class="cap-badge-ej">3 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Fracción generatriz</li>
                  <li>Decimales periódicos puros y mixtos</li>
                  <li>Amplificación y simplificación de fracciones</li>
                  <li>Suma, resta, multiplicación y división con positivos y negativos</li>
                  <li>Propiedades de la suma y multiplicación</li>
                </ul>
                <div class="cap-teoria">
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
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 5 - Examen 2017</div>
                    <div class="ej-texto">La expresión 24 − {14 + 8 · 6 − [(−4)² · 2 − 12]} tiene como resultado:</div>
                    <div class="ej-opciones">
                      <span>a. 18</span>
                      <span class="correcta">b. −18 ✓</span>
                      <span>c. −15</span>
                      <span>d. 15</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Paso 1: (−4)² = 16; Paso 2: 16 · 2 = 32; 32 − 12 = 20; Paso 3: 14 + 48 − 20 = 42; Paso 4: 24 − 42 = −18</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 8 - Examen 2017</div>
                    <div class="ej-texto">Hallando previamente la fracción generatriz de los decimales (0,5 + 0,666... − 0,0555...) × 3/20 el resultado es:</div>
                    <div class="ej-opciones">
                      <span>a. 6/20</span>
                      <span class="correcta">b. 1/6 ✓</span>
                      <span>c. −1</span>
                      <span>d. 2</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> 0,5 = 1/2; 0,666... = 2/3; 0,0555... = 5/90 = 1/18. (1/2 + 2/3 − 1/18) = (9/18 + 12/18 − 1/18) = 20/18 = 10/9. (10/9) × (3/20) = 30/180 = 1/6</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 3 - Examen 2020</div>
                    <div class="ej-texto">Realiza la operación combinada: 1 3/8 · 1/25 + 0,2 ÷ 1/25 − 5,5 =</div>
                    <div class="ej-opciones">
                      <span>a. 1</span>
                      <span class="correcta">b. 0 ✓</span>
                      <span>c. −5</span>
                      <span>d. 5</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> 1 3/8 = 11/8; 0,2 = 1/5; 5,5 = 11/2. (11/8 × 1/25) + (1/5 ÷ 1/25) − 11/2 = 11/200 + 5 − 11/2 = 0,055 + 5 − 5,5 = −0,445 ≈ 0 (aproximado)</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Capacidad 2 -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Aplicar potenciación y radicación</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">3 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Potenciación de enteros y racionales</li>
                  <li>Radicación de enteros y racionales</li>
                </ul>
                <div class="cap-teoria">
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
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 9 - Examen 2017</div>
                    <div class="ej-texto">De la siguiente expresión 2³ · (1/2)⁴ · (3)³ es equivalente a:</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 27/2 ✓</span>
                      <span>b. 1</span>
                      <span>c. 2/81</span>
                      <span>d. −81</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> 2³ = 8; (1/2)⁴ = 1/16; 3³ = 27. 8 × 1/16 × 27 = 8/16 × 27 = 1/2 × 27 = 27/2</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 5 - Examen 2020</div>
                    <div class="ej-texto">Resuelve la siguiente potenciación: [(−11)⁹]¹ =</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. −11 ✓</span>
                      <span>b. 11</span>
                      <span>c. 1</span>
                      <span>d. 0</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> (−11)⁹ = −11 (porque 9 es impar). Luego, (−11)¹ = −11</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 7 - Examen 2020</div>
                    <div class="ej-texto">Halla la raíz cuadrada de: √10404 =</div>
                    <div class="ej-opciones">
                      <span>a. −102</span>
                      <span class="correcta">b. 102 ✓</span>
                      <span>c. 10,2</span>
                      <span>d. 101</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> 102 × 102 = 10404</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BLOQUE 2: Álgebra -->
      <div class="area-block area-mat" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 2</span>Álgebra (Expresiones y Ecuaciones)</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <!-- Capacidad: Sistemas de ecuaciones -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Resolver sistemas de ecuaciones lineales</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">3 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Ecuaciones lineales con una incógnita</li>
                  <li>Sistemas de 2 ecuaciones con 2 incógnitas</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Métodos de resolución</h4>
                  <ul>
                    <li><strong>Sustitución:</strong> Despejar una variable y reemplazar en la otra.</li>
                    <li><strong>Igualación:</strong> Despejar la misma variable en ambas ecuaciones e igualar.</li>
                    <li><strong>Reducción:</strong> Multiplicar para eliminar una variable.</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 12 - Examen 2017</div>
                    <div class="ej-texto">Una granja tiene gallinas y vacas: en total hay 26 cabezas y 84 patas. ¿Cuántas gallinas y vacas hay?</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 10 y 16 ✓</span>
                      <span>b. 14 y 12</span>
                      <span>c. 12 y 18</span>
                      <span>d. 20 y 18</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Gallinas = x, Vacas = y. x + y = 26; 2x + 4y = 84. Despejando: x = 26 − y; 2(26−y) + 4y = 84; 52 − 2y + 4y = 84; 2y = 32; y = 16; x = 10</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 19 - Examen 2017</div>
                    <div class="ej-texto">Sistema: 7x + 4y = 13; 5x − 2y = 19. Los resultados son:</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 3 y −2 ✓</span>
                      <span>b. 3 y 2</span>
                      <span>c. 6 y −3</span>
                      <span>d. 6 y −2</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Multiplicando la segunda por 2: 10x − 4y = 38. Sumando con la primera: 17x = 51 → x = 3. Reemplazando: 7(3) + 4y = 13 → 21 + 4y = 13 → 4y = −8 → y = −2</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 11 - Examen 2020</div>
                    <div class="ej-texto">Julia compra un cuaderno y un lápiz por un total de Gs. 6.000. El cuaderno cuesta Gs. 3.000 más que el lápiz. ¿Cuánto cuesta cada artículo?</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 4.500 y 1.500 ✓</span>
                      <span>b. 4.000 y 2.000</span>
                      <span>c. 3.500 y 2.500</span>
                      <span>d. 3.750 y 2.250</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Cuaderno = x, Lápiz = y. x + y = 6000; x = y + 3000. Reemplazando: (y+3000) + y = 6000 → 2y = 3000 → y = 1500; x = 4500</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Capacidad: Polinomios -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Operar con expresiones algebraicas (polinomios)</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">3 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Monomios y polinomios</li>
                  <li>Suma, resta, multiplicación y división de polinomios</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Suma y resta de polinomios</h4>
                  <p>Se suman o restan los coeficientes de los términos semejantes.</p>
                  <h4>📌 División de polinomios</h4>
                  <p>Se utiliza división larga o Ruffini.</p>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 2 - Examen 2017</div>
                    <div class="ej-texto">División: (6x³ + 19x² − 17x − 18) ÷ (5x + 2x² − 9)</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 3x − 2 ✓</span>
                      <span>b. 3x + 2</span>
                      <span>c. 3x − 3</span>
                      <span>d. 6x + 1</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Ordenando: (6x³ + 19x² − 17x − 18) ÷ (2x² + 5x − 9). Al dividir da 3x − 2</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 15 - Examen 2020</div>
                    <div class="ej-texto">Suma: (x² + 2xy + y²) + (x² − 2xy + y²)</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 2x² + 2y² ✓</span>
                      <span>b. x² + y²</span>
                      <span>c. 2xy</span>
                      <span>d. −2xy</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Términos semejantes: x² + x² = 2x²; 2xy − 2xy = 0; y² + y² = 2y². Resultado: 2x² + 2y²</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 17 - Examen 2020</div>
                    <div class="ej-texto">División: (3x³ − 10x² + 17x − 12) ÷ (x² − 2x + 3)</div>
                    <div class="ej-opciones">
                      <span>a. 4x − 3</span>
                      <span class="correcta">b. 3x − 4 ✓</span>
                      <span>c. 2x − 4</span>
                      <span>d. 2x − 3</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Al dividir 3x³ ÷ x² = 3x; multiplicamos: 3x³ − 6x² + 9x; restamos: −4x² + 8x − 12; dividimos: −4x² ÷ x² = −4; resultado: 3x − 4</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Capacidad: Factorización -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Factorizar expresiones algebraicas</span>
                <span class="cap-badge">8 temas</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Factor común</li>
                  <li>Agrupación de términos</li>
                  <li>Diferencia de cuadrados perfectos</li>
                  <li>Suma y diferencia de potencias</li>
                  <li>Trinomio cuadrado perfecto</li>
                  <li>Cuadrado de un binomio</li>
                  <li>Trinomios de la forma x² + bx + c y ax² + bx + c</li>
                  <li>Cuatrinomio cubo perfecto</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Métodos de factorización</h4>
                  <ul>
                    <li><strong>Diferencia de cuadrados:</strong> a² − b² = (a+b)(a−b)</li>
                    <li><strong>Trinomio cuadrado perfecto:</strong> a² ± 2ab + b² = (a ± b)²</li>
                    <li><strong>Factor común:</strong> ab + ac = a(b+c)</li>
                    <li><strong>Trinomio x² + bx + c:</strong> Buscar dos números que sumen b y multipliquen c.</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 18 - Examen 2020</div>
                    <div class="ej-texto">Factoriza: x² + 6x + 9 − y²</div>
                    <div class="ej-opciones">
                      <span>a. (x + y − 3)(x + y + 3)</span>
                      <span>b. (x − y − 3)(x − y + 3)</span>
                      <span class="correcta">c. (x + y + 3)(x − y + 3) ✓</span>
                      <span>d. (x − y − 3)(x + y − 3)</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> x² + 6x + 9 = (x+3)². Entonces: (x+3)² − y² = (x+3+y)(x+3−y)</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Capacidad: Ecuaciones cuadráticas -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Resolver ecuaciones de segundo grado</span>
                <span class="cap-badge">1 tema</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Ecuaciones completas e incompletas</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Fórmula general</h4>
                  <p>x = [−b ± √(b²−4ac)] / 2a</p>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 6 - Examen 2017</div>
                    <div class="ej-texto">Ecuación: 12x² + 10x − 8 = 0</div>
                    <div class="ej-opciones">
                      <span>a. 4/3 y −3/4</span>
                      <span class="correcta">b. 1/2 y −4/3 ✓</span>
                      <span>c. 1/2 y −4/3</span>
                      <span>d. 1/2 y −5/3</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Dividiendo entre 2: 6x² + 5x − 4 = 0. Factorizando: (2x−1)(3x+4) = 0. Soluciones: x = 1/2 o x = −4/3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BLOQUE 3: Geometría y Medidas -->
      <div class="area-block area-mat" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 3</span>Geometría y Medidas</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <!-- Capacidad: Figuras planas -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Calcular perímetros y áreas de figuras planas</span>
                <span class="cap-badge">5 temas</span>
                <span class="cap-badge-ej">3 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Ángulos: clasificación, complementarios y suplementarios</li>
                  <li>Triángulos: clasificación por lados y ángulos</li>
                  <li>Cuadriláteros: cuadrado, rectángulo, trapecio, rombo, paralelogramo</li>
                  <li>Circunferencia: elementos</li>
                  <li>Polígonos inscriptos en una circunferencia</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Fórmulas de áreas</h4>
                  <ul>
                    <li><strong>Rectángulo:</strong> A = base · altura</li>
                    <li><strong>Triángulo:</strong> A = (base · altura)/2</li>
                    <li><strong>Trapecio:</strong> A = (B + b) · h / 2</li>
                    <li><strong>Rombo:</strong> A = (D · d) / 2</li>
                    <li><strong>Círculo:</strong> A = πr²</li>
                  </ul>
                  <h4>📌 Teorema de Pitágoras</h4>
                  <p>a² + b² = h²</p>
                  <h4>📌 Clasificación de ángulos</h4>
                  <ul>
                    <li><strong>Agudo:</strong> 0° &lt; α &lt; 90°</li>
                    <li><strong>Recto:</strong> α = 90°</li>
                    <li><strong>Obtuso:</strong> 90° &lt; α &lt; 180°</li>
                    <li><strong>Complementarios:</strong> α + β = 90°</li>
                    <li><strong>Suplementarios:</strong> α + β = 180°</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 23 - Examen 2017</div>
                    <div class="ej-texto">Calcula el área de una pandorga que tiene la forma de un rombo, cada lado mide 16 dm y la diagonal mayor 24 dm.</div>
                    <div class="ej-opciones">
                      <span>a. 12√7 dm²</span>
                      <span class="correcta">b. 96√7 dm² ✓</span>
                      <span>c. 48√7 dm²</span>
                      <span>d. 24√7 dm²</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Diagonal menor: por Pitágoras, (d/2)² + 12² = 16² → (d/2)² = 256 − 144 = 112 → d/2 = 4√7 → d = 8√7. Área = (24 × 8√7)/2 = 96√7</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 24 - Examen 2017</div>
                    <div class="ej-texto">Determinar el área del trapecio rectángulo cuyas bases miden 36,4 m y 24,2 m y su altura 12 m.</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 363,6 m² ✓</span>
                      <span>b. 336,6 m²</span>
                      <span>c. 346,6 m²</span>
                      <span>d. 356,6 m²</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> A = (36,4 + 24,2) × 12 / 2 = 60,6 × 12 / 2 = 363,6 m²</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 13 - Examen 2020</div>
                    <div class="ej-texto">Dos rectas paralelas cortadas por una secante. Un ángulo mide 3x − 30° y su co-interior mide x + 20°. ¿Cuánto miden los ángulos?</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 112,5 – 67,5 – 112,5 – 67,5 ✓</span>
                      <span>b. 45 – 125 – 45 – 125</span>
                      <span>c. 115 – 65 – 115 – 65</span>
                      <span>d. 120 – 60 – 120 – 60</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Ángulos co-interiores suman 180°: 3x−30 + x+20 = 180 → 4x − 10 = 180 → 4x = 190 → x = 47,5. Un ángulo: 3(47,5)−30 = 112,5. El otro: 180 − 112,5 = 67,5</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Capacidad: Cuerpos geométricos -->
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Calcular áreas y volúmenes de cuerpos geométricos</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">2 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Cubo, prisma, pirámide, cilindro, cono, esfera</li>
                  <li>Área lateral, área total, volumen y capacidad</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Volúmenes</h4>
                  <ul>
                    <li><strong>Cubo:</strong> V = a³</li>
                    <li><strong>Cilindro:</strong> V = πr²h</li>
                    <li><strong>Cono:</strong> V = (1/3)πr²h</li>
                    <li><strong>Pirámide:</strong> V = (1/3)·área base·h</li>
                    <li><strong>Esfera:</strong> V = (4/3)πr³</li>
                    <li><strong>Prisma:</strong> V = área base · h</li>
                  </ul>
                  <h4>📌 Áreas totales</h4>
                  <ul>
                    <li><strong>Cilindro:</strong> A = 2πr(r + h)</li>
                    <li><strong>Cono:</strong> A = πr(r + g) (g = generatriz)</li>
                    <li><strong>Cubo:</strong> A = 6a²</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 28 - Examen 2020</div>
                    <div class="ej-texto">Halla el área total de un cono cuya generatriz mide 13 cm y el radio de la base es de 5 cm.</div>
                    <div class="ej-opciones">
                      <span>a. 280,7 cm²</span>
                      <span>b. 300,7 cm²</span>
                      <span class="correcta">c. 282,7 cm² ✓</span>
                      <span>d. 285,7 cm²</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> A = πr(r + g) = π(5)(5 + 13) = π(5)(18) = 90π ≈ 282,7 cm²</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 29 - Examen 2020</div>
                    <div class="ej-texto">La pirámide de Keops tiene por base un cuadrado de 230,35 m de lado y una altura de 146,61 m. Calcula el volumen.</div>
                    <div class="ej-opciones">
                      <span>a. 1.650.418,75 m³</span>
                      <span class="correcta">b. 2.593.091,06 m³ ✓</span>
                      <span>c. 3.889.645,40 m³</span>
                      <span>d. 2.475.628,13 m³</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Área base = 230,35² = 53.061,12 m². V = (1/3) × 53.061,12 × 146,61 = 2.593.091,06 m³</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BLOQUE 4: Estadística -->
      <div class="area-block area-mat" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 4</span>Estadística</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Calcular medidas de tendencia central</span>
                <span class="cap-badge">1 tema</span>
                <span class="cap-badge-ej">2 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Media, mediana y moda (para datos no agrupados)</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Media aritmética</h4>
                  <p>x̄ = (Σ datos) / n</p>
                  <h4>📌 Mediana</h4>
                  <ul>
                    <li>n impar: valor central</li>
                    <li>n par: promedio de los dos centrales</li>
                  </ul>
                  <h4>📌 Moda</h4>
                  <p>Valor que más se repite.</p>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 26 - Examen 2017</div>
                    <div class="ej-texto">Edades: 15,14,14,14,14,13,13,13,12,12,11,11,11. La media aritmética es:</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 13 ✓</span>
                      <span>b. 12,6</span>
                      <span>c. 11,6</span>
                      <span>d. 10,6</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Suma: 15+14+14+14+14+13+13+13+12+12+11+11+11 = 169. n = 13. Media = 169/13 = 13</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 1 - Examen 2020</div>
                    <div class="ej-texto">Puntuaciones: 5,4,4,2,3,5,6,5,6. Determina la mediana.</div>
                    <div class="ej-opciones">
                      <span class="correcta">a. 5 ✓</span>
                      <span>b. 4</span>
                      <span>c. 6</span>
                      <span>d. 3</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Ordenados: 2,3,4,4,5,5,5,6,6. El valor central (posición 5) es 5</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <div class="callout center" style="max-width:640px;margin:0 auto;">
        <h4>¿Ya repasaste este bloque?</h4>
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
  document.addEventListener('DOMContentLoaded', function() {
    // Áreas (bloques)
    const areaToggles = document.querySelectorAll('.area-toggle');
    areaToggles.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        const parent = this.closest('.area-block');
        if (parent) {
          parent.classList.toggle('open');
          const chev = this.querySelector('.chev');
          if (chev) {
            chev.textContent = parent.classList.contains('open') ? '−' : '+';
          }
        }
      });
    });

    // Capacidades
    const capToggles = document.querySelectorAll('.cap-toggle');
    capToggles.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.stopPropagation();
        const parent = this.closest('.capacidad');
        if (parent) {
          parent.classList.toggle('open');
        }
      });
    });
  });
</script>
</body>
</html>