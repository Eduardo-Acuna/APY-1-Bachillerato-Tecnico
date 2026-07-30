<?php
/**
 * Temario completo para el Examen de Admisión — Bachillerato Técnico 2026
 * Cada capacidad incluye:
 *   - temas       : lista de temas puntuales (como en el material oficial)
 *   - teoria      : explicación teórica ampliada, con definiciones y propiedades
 *   - demostracion: una demostración o modelo de análisis paso a paso (de dónde
 *                   sale la fórmula / cómo se aplica el método, no solo el resultado)
 *   - ejemplos    : ejercicios reales resueltos y verificados (2017/2020), o
 *                   elaborados a partir del temario cuando no había un ítem real
 *                   equivalente (así se indica en el título de cada ejemplo).
 */
$temario = [

  // =====================================================================
  // ÁREA 1 — MATEMÁTICA
  // =====================================================================
  [
    'id' => 'matematica',
    'numero' => '01',
    'nombre' => 'Matemática',
    'color' => 'mat',
    'bloques' => [

      [
        'titulo' => 'Bloque 1 · Números y Operaciones Básicas',
        'capacidades' => [

          [
            'cap' => 'Operar con números enteros y racionales (fracciones y decimales)',
            'temas' => ['Fracción generatriz','Decimales periódicos puros y mixtos','Amplificación y simplificación de fracciones','Suma, resta, multiplicación y división con positivos y negativos','Propiedades de la suma y multiplicación'],
            'teoria' => '
              <h4>Números racionales</h4>
              <p>Un <strong>número racional</strong> es todo número que puede escribirse como una fracción a/b, con a y b enteros y b ≠ 0. Todos los decimales <strong>exactos</strong> y <strong>periódicos</strong> son racionales, porque siempre pueden convertirse a fracción.</p>
              <h4>Decimal periódico puro y mixto</h4>
              <ul>
                <li><strong>Periódico puro</strong>: el período comienza inmediatamente después de la coma (ej. 1,3̂3̂3̂… = 1,3̂).</li>
                <li><strong>Periódico mixto</strong>: hay una parte no periódica (anteperíodo) entre la coma y el período (ej. 0,41̂6̂6̂… donde "4" es anteperíodo y "16" es el período —ojo, en este ejemplo solo iría "6" repitiéndose, se usa a modo ilustrativo).</li>
              </ul>
              <h4>Propiedades de la suma y la multiplicación</h4>
              <ul>
                <li><strong>Conmutativa</strong>: a + b = b + a &nbsp;&nbsp; a · b = b · a</li>
                <li><strong>Asociativa</strong>: (a + b) + c = a + (b + c)</li>
                <li><strong>Distributiva</strong> de la multiplicación sobre la suma: a · (b + c) = a·b + a·c</li>
                <li><strong>Elemento neutro</strong>: a + 0 = a &nbsp;&nbsp; a · 1 = a</li>
              </ul>
              <h4>Jerarquía de operaciones combinadas</h4>
              <p>Siempre en este orden: <strong>1)</strong> paréntesis/corchetes/llaves, <strong>2)</strong> potenciación y radicación, <strong>3)</strong> multiplicación y división (de izquierda a derecha), <strong>4)</strong> suma y resta (de izquierda a derecha).</p>
            ',
            'demostracion' => '
              <h4>Demostración: ¿de dónde sale la "regla" de la fracción generatriz?</h4>
              <p>Tomemos x = 1,3̂ (1,333…). Como el período tiene 1 cifra, multiplicamos x por 10:</p>
              <p>10x = 13,333…</p>
              <p>Restamos la ecuación original a esta nueva ecuación, para que la parte decimal infinita se cancele:</p>
              <p>10x − x = 13,333… − 1,333… &nbsp;→&nbsp; 9x = 12 &nbsp;→&nbsp; x = 12/9 = 4/3.</p>
              <p>Esa es la razón por la que, en la práctica, "se resta el número completo menos la parte entera y se divide entre tantos 9 como cifras tenga el período": es exactamente lo que hicimos acá, pero como atajo.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 3 · Examen 2020',
                'texto' => 'Realiza la operación combinada de los siguientes números reales: 1,3̂ · 3/8 + 0,2 ÷ 1/25 − 5,5',
                'opciones' => ['−1/80','0','−5','5'],
                'correcta' => 1,
                'explicacion' => 'Primero convertimos 1,3̂ a fracción generatriz: 1,3̂ = 4/3. Luego: 4/3 · 3/8 = 12/24 = 1/2. Después: 0,2 ÷ 1/25 = 0,2 × 25 = 5. Sumamos y restamos en orden: 1/2 + 5 − 5,5 = 5,5 − 5,5 = 0.'
              ],
              [
                'titulo' => 'Ejercicio 2 · Examen 2020',
                'texto' => 'Tenía ₲900.000 en mi caja de ahorros. Hice tres extracciones de ₲150.000 cada una. Luego deposité el doble de lo que extraje y, finalmente, retiré la cuarta parte del dinero que tenía inicialmente. ¿Cuál es mi saldo actual?',
                'opciones' => ['1.012.500 ₲','1.575.000 ₲','1.125.000 ₲','525.000 ₲'],
                'correcta' => 2,
                'explicacion' => 'Extrajo 3 × 150.000 = 450.000, quedando 900.000 − 450.000 = 450.000. Depositó el doble de lo extraído: 2 × 450.000 = 900.000, quedando 450.000 + 900.000 = 1.350.000. Finalmente retiró la cuarta parte de lo inicial: 900.000 ÷ 4 = 225.000, quedando 1.350.000 − 225.000 = 1.125.000 ₲.'
              ],
            ]
          ],

          [
            'cap' => 'Aplicar potenciación y radicación',
            'temas' => ['Potenciación de enteros y racionales','Radicación de enteros y racionales'],
            'teoria' => '
              <h4>Propiedades de la potenciación</h4>
              <ul>
                <li>a⁰ = 1 (para todo a ≠ 0), incluso si a es negativo: (−11)⁰ = 1.</li>
                <li>aᵐ · aⁿ = aᵐ⁺ⁿ &nbsp;&nbsp; aᵐ ÷ aⁿ = aᵐ⁻ⁿ &nbsp;&nbsp; (aᵐ)ⁿ = aᵐ·ⁿ &nbsp;&nbsp; (a·b)ⁿ = aⁿ·bⁿ</li>
                <li>Un número negativo elevado a exponente par da resultado positivo; a exponente impar, negativo.</li>
                <li>a⁻ⁿ = 1/aⁿ (exponente negativo = recíproco con exponente positivo).</li>
              </ul>
              <h4>Radicación</h4>
              <p>La raíz n-ésima de a (ⁿ√a) es el número que elevado a n da a. Si el índice es impar, la raíz de un número negativo también es negativa (³√−8 = −2, porque (−2)³ = −8). Si el índice es par, no existe raíz real de un número negativo.</p>
              <p>Para hallar raíces exactas conviene descomponer en factores primos o reconocer cuadrados/cubos perfectos (4, 9, 16, 25… / 1, 8, 27, 64…).</p>
            ',
            'demostracion' => '
              <h4>Demostración: por qué aᵐ · aⁿ = aᵐ⁺ⁿ</h4>
              <p>Tomemos un ejemplo concreto: 2³ · 2² . Por definición, 2³ = 2·2·2 y 2² = 2·2. Multiplicando:</p>
              <p>2³ · 2² = (2·2·2) · (2·2) = 2·2·2·2·2 = 2⁵</p>
              <p>Contamos los factores: 3 + 2 = 5. Por eso, al multiplicar potencias de igual base, simplemente se suman los exponentes: no hace falta "abrir" cada potencia si ya sabemos que se cumple en general.</p>
              <h4>Demostración: por qué a⁰ = 1</h4>
              <p>Usando la misma propiedad: aⁿ ÷ aⁿ = aⁿ⁻ⁿ = a⁰. Pero cualquier número dividido por sí mismo (distinto de 0) da 1. Entonces a⁰ tiene que ser igual a 1, para que la propiedad no se rompa.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 5 · Examen 2020',
                'texto' => 'Resuelve la siguiente potenciación: [(−11)⁰]¹ =',
                'opciones' => ['−11','11','1','0'],
                'correcta' => 2,
                'explicacion' => 'Cualquier número distinto de cero elevado a 0 es igual a 1, sin importar su signo: (−11)⁰ = 1. Luego, 1 elevado a 1 sigue siendo 1.'
              ],
              [
                'titulo' => 'Ejercicio 6 · Examen 2020',
                'texto' => 'Halla la raíz cúbica de la siguiente expresión: ³√[(−0,125) · (1000/27)]',
                'opciones' => ['5/3','−5/3','3/5','−3/5'],
                'correcta' => 1,
                'explicacion' => '−0,125 = −1/8. Multiplicando: (−1/8) · (1000/27) = −1000/216 = −125/27. La raíz cúbica de −125/27 es −5/3, porque (−5/3)³ = −125/27.'
              ],
              [
                'titulo' => 'Ejercicio 7 · Examen 2020',
                'texto' => 'Halla la raíz cuadrada de: √10404 =',
                'opciones' => ['−102','102','10,2','101'],
                'correcta' => 1,
                'explicacion' => 'Se busca un número que multiplicado por sí mismo dé 10404. Probando: 102 × 102 = 10404. Por convención, la raíz cuadrada principal (el símbolo √) es siempre el valor positivo: 102.'
              ],
            ]
          ],
        ]
      ],

      [
        'titulo' => 'Bloque 2 · Álgebra (Expresiones y Ecuaciones)',
        'capacidades' => [

          [
            'cap' => 'Resolver sistemas de ecuaciones lineales',
            'temas' => ['Ecuaciones lineales con una incógnita','Sistemas de 2 ecuaciones con 2 incógnitas'],
            'teoria' => '
              <h4>Ecuación lineal con una incógnita</h4>
              <p>Se despeja la incógnita aplicando operaciones inversas a ambos lados de la igualdad (lo que se hace de un lado, se debe hacer del otro), hasta dejarla sola.</p>
              <h4>Sistemas de 2×2</h4>
              <p>Se puede resolver por tres métodos:</p>
              <ul>
                <li><strong>Sustitución</strong>: despejar una incógnita en una ecuación y reemplazarla en la otra.</li>
                <li><strong>Igualación</strong>: despejar la misma incógnita en ambas ecuaciones e igualar las expresiones.</li>
                <li><strong>Reducción (suma o resta)</strong>: multiplicar una o ambas ecuaciones para que los coeficientes de una incógnita sean opuestos, y sumar para eliminarla.</li>
              </ul>
              <p>Un sistema 2×2 representa geométricamente dos rectas: si tiene una única solución, las rectas se cortan en un punto; si no tiene solución, son paralelas; si tiene infinitas soluciones, son la misma recta.</p>
            ',
            'demostracion' => '
              <h4>Demostración: método de reducción, paso a paso</h4>
              <p>Sistema: 8x − 15y = −12 &nbsp;(1) &nbsp;&nbsp; 8x − 5y = 0 &nbsp;(2)</p>
              <p><strong>Paso 1.</strong> Elegimos eliminar x, porque ya tiene el mismo coeficiente (8) en ambas ecuaciones.</p>
              <p><strong>Paso 2.</strong> Restamos la ecuación (1) de la ecuación (2), término a término:</p>
              <p>(8x − 5y) − (8x − 15y) = 0 − (−12)</p>
              <p>8x − 5y − 8x + 15y = 12 &nbsp;→&nbsp; 10y = 12 &nbsp;→&nbsp; y = 6/5</p>
              <p><strong>Paso 3.</strong> Sustituimos y = 6/5 en la ecuación (2): 8x − 5·(6/5) = 0 → 8x − 6 = 0 → x = 6/8 = 3/4.</p>
              <p><strong>Paso 4 (verificación).</strong> Reemplazamos ambos valores en la ecuación (1): 8·(3/4) − 15·(6/5) = 6 − 18 = −12. ✓ Coincide.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 9 · Examen 2020',
                'texto' => 'Resuelve la ecuación: 4 + 3(2x + 2) = 4(x − 1)',
                'opciones' => ['7','3','−3','−7'],
                'correcta' => 3,
                'explicacion' => 'Se distribuye: 4 + 6x + 6 = 4x − 4 → 6x + 10 = 4x − 4. Se agrupan términos: 6x − 4x = −4 − 10 → 2x = −14 → x = −7.'
              ],
              [
                'titulo' => 'Ejercicio 21 · Examen 2020',
                'texto' => 'Resuelve el sistema: 8x − 15y = −12 ; 8x − 5y = 0',
                'opciones' => ['x = 6/5 ; y = 3/4','x = 5/6 ; y = 4/3','x = −3/4 ; y = 6/5','x = 3/4 ; y = 6/5'],
                'correcta' => 3,
                'explicacion' => 'Por reducción, restamos la primera ecuación de la segunda: (8x−5y) − (8x−15y) = 0 − (−12) → 10y = 12 → y = 6/5. Sustituyendo en 8x − 5y = 0: 8x = 5·(6/5) = 6 → x = 6/8 = 3/4.'
              ],
              [
                'titulo' => 'Ejercicio 11 · Examen 2020 (problema de planteo)',
                'texto' => 'Julia compra un cuaderno y un lápiz por un total de ₲6.000. El cuaderno cuesta ₲3.000 más que el lápiz. ¿Cuánto cuesta cada artículo?',
                'opciones' => ['4500 y 1500','4000 y 2000','3500 y 2500','3750 y 2250'],
                'correcta' => 0,
                'explicacion' => 'Sea x el precio del lápiz; el cuaderno cuesta x + 3000. Entonces x + (x + 3000) = 6000 → 2x = 3000 → x = 1500 (lápiz). El cuaderno cuesta 1500 + 3000 = 4500.'
              ],
            ]
          ],

          [
            'cap' => 'Operar con expresiones algebraicas',
            'temas' => ['Monomios y polinomios','Suma, resta, multiplicación y división de polinomios'],
            'teoria' => '
              <h4>Monomios y polinomios</h4>
              <p>Un <strong>monomio</strong> es una expresión algebraica de un solo término (ej. 5x²), formado por un coeficiente y una parte literal. Un <strong>polinomio</strong> es una suma de monomios (sus términos); el <strong>grado</strong> del polinomio es el mayor exponente que aparece.</p>
              <h4>Suma y resta</h4>
              <p>Solo se suman o restan los <strong>términos semejantes</strong> (misma parte literal y mismo exponente), sumando o restando sus coeficientes.</p>
              <h4>Multiplicación</h4>
              <p>Se multiplica cada término del primer polinomio por cada término del segundo (propiedad distributiva) y luego se reducen términos semejantes.</p>
              <h4>División</h4>
              <p>Se ordenan ambos polinomios en forma decreciente según el grado (completando con coeficiente 0 los términos que falten). Se divide el primer término del dividendo entre el primer término del divisor, se multiplica ese resultado por todo el divisor, se resta del dividendo, y se repite el proceso con el resto hasta que su grado sea menor que el del divisor.</p>
            ',
            'demostracion' => '
              <h4>Demostración: división de polinomios, paso a paso</h4>
              <p>Dividir (3x³ − 10x² + 17x − 12) ÷ (x² − 2x + 3):</p>
              <p><strong>Paso 1.</strong> 3x³ ÷ x² = 3x (primer término del cociente).</p>
              <p><strong>Paso 2.</strong> Multiplicamos 3x por todo el divisor: 3x·(x² − 2x + 3) = 3x³ − 6x² + 9x.</p>
              <p><strong>Paso 3.</strong> Restamos ese resultado del dividendo: (3x³ − 10x² + 17x − 12) − (3x³ − 6x² + 9x) = −4x² + 8x − 12.</p>
              <p><strong>Paso 4.</strong> Repetimos con el resto: −4x² ÷ x² = −4 (segundo término del cociente). Multiplicamos: −4·(x² − 2x + 3) = −4x² + 8x − 12. Restamos: 0.</p>
              <p>Como el resto dio 0, la división es exacta y el cociente es 3x − 4.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 15 · Examen 2020',
                'texto' => 'Realiza la suma de los siguientes polinomios: (x² + 2xy + y²) + (x² − 2xy + y²)',
                'opciones' => ['2x² + 2y²','x² + y²','2xy','−2xy'],
                'correcta' => 0,
                'explicacion' => 'Se agrupan términos semejantes: x² + x² = 2x²; 2xy − 2xy = 0; y² + y² = 2y². El resultado es 2x² + 2y².'
              ],
              [
                'titulo' => 'Ejercicio 16 · Examen 2020',
                'texto' => 'Dados los polinomios A: x² − 2x − 6, B: 2x + 5, C: 2x² − 1, realiza la operación (A · B) − C.',
                'opciones' => ['2x³ + x² − 22x − 29','2x³ − x² − 22x − 29','2x³ − x² − 22x − 31','2x³ − x² − 22x + 30'],
                'correcta' => 1,
                'explicacion' => 'A · B = (x²−2x−6)(2x+5) = 2x³+5x²−4x²−10x−12x−30 = 2x³+x²−22x−30. Restando C: (2x³+x²−22x−30) − (2x²−1) = 2x³ + (x²−2x²) − 22x + (−30+1) = 2x³ − x² − 22x − 29.'
              ],
              [
                'titulo' => 'Ejercicio 17 · Examen 2020',
                'texto' => 'Efectúa la división: (3x³ − 10x² + 17x − 12) ÷ (x² − 2x + 3)',
                'opciones' => ['4x − 3','3x − 4','2x − 4','2x − 3'],
                'correcta' => 1,
                'explicacion' => 'Ver la demostración de esta capacidad: siguiendo el algoritmo paso a paso, el cociente es 3x − 4, sin resto.'
              ],
            ]
          ],

          [
            'cap' => 'Factorizar expresiones algebraicas',
            'temas' => ['Factor común','Agrupación de términos','Diferencia de cuadrados perfectos','Suma y diferencia de potencias','Trinomio cuadrado perfecto','Cuadrado de un binomio','Trinomios de la forma: x² + bx + c y ax² + bx + c','Cuatrinomio cubo perfecto'],
            'teoria' => '
              <h4>Casos principales</h4>
              <ul>
                <li><strong>Factor común</strong>: se extrae el término que se repite en todos los sumandos. Ej. 6x² + 9x = 3x(2x + 3).</li>
                <li><strong>Diferencia de cuadrados</strong>: a² − b² = (a + b)(a − b).</li>
                <li><strong>Trinomio cuadrado perfecto</strong>: a² ± 2ab + b² = (a ± b)².</li>
                <li><strong>Trinomio x² + bx + c</strong>: se buscan dos números que multiplicados den c y sumados den b: x² + bx + c = (x + p)(x + q).</li>
                <li><strong>Agrupación de términos</strong>: se agrupan los términos de a pares para sacar un factor común en cada grupo, y luego un factor común entre los grupos.</li>
              </ul>
              <p>Muchas veces conviene combinar más de un caso en el mismo ejercicio, por ejemplo un trinomio cuadrado perfecto seguido de una diferencia de cuadrados.</p>
            ',
            'demostracion' => '
              <h4>Demostración: por qué a² − b² = (a + b)(a − b)</h4>
              <p>Partimos del lado derecho y multiplicamos, para comprobar que efectivamente da el lado izquierdo (esto se llama verificar una identidad):</p>
              <p>(a + b)(a − b) = a·a − a·b + b·a − b·b = a² − ab + ab − b² = a² − b²</p>
              <p>Los términos −ab y +ab se cancelan entre sí; por eso la diferencia de cuadrados "pierde" el término del medio y queda solo a² − b².</p>
              <h4>Demostración aplicada: x² + 6x + 9 − y²</h4>
              <p>Los primeros tres términos son un trinomio cuadrado perfecto, porque 6x = 2·x·3 y 9 = 3²: x² + 6x + 9 = (x + 3)². Entonces la expresión completa queda (x+3)² − y², que ya es una diferencia de cuadrados: (x+3+y)(x+3−y).</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 18 · Examen 2020',
                'texto' => 'Factoriza según corresponda: x² + 6x + 9 − y²',
                'opciones' => ['(x + y − 3)(x + y + 3)','(x − y − 3)(x − y + 3)','(x + y + 3)(x − y + 3)','(x − y − 3)(x + y − 3)'],
                'correcta' => 2,
                'explicacion' => 'Los primeros tres términos forman un trinomio cuadrado perfecto: x² + 6x + 9 = (x + 3)². Queda (x+3)² − y², que es una diferencia de cuadrados: [(x+3)+y][(x+3)−y] = (x + y + 3)(x − y + 3).'
              ],
            ]
          ],

          [
            'cap' => 'Operar con expresiones racionales algebraicas',
            'temas' => ['MCD y mcm','Simplificación de fracciones algebraicas','Suma, resta, multiplicación y división de fracciones algebraicas'],
            'teoria' => '
              <h4>Simplificación</h4>
              <p>Se factoriza numerador y denominador y se cancelan los factores comunes. Nunca se cancelan términos sueltos de una suma, solo factores completos de una multiplicación.</p>
              <h4>Multiplicación y división</h4>
              <p>Se multiplican numeradores entre sí y denominadores entre sí (factorizando primero para simplificar antes de multiplicar). Para dividir, se multiplica por el recíproco (inverso) de la segunda fracción.</p>
              <h4>Suma y resta</h4>
              <p>Se busca el <strong>mínimo común múltiplo (mcm)</strong> de los denominadores factorizados, y se procede igual que con fracciones numéricas.</p>
              <h4>Fracciones complejas</h4>
              <p>Cuando una fracción tiene otra fracción en el numerador y/o denominador, conviene resolver primero cada nivel por separado (numerador y denominador) y luego dividir el resultado final.</p>
            ',
            'demostracion' => '
              <h4>Demostración: simplificación factorizando</h4>
              <p>Simplificar [(x² − 3x − 4)/(x² − 2x − 15)] · [(x + 3)/(x + 1)]:</p>
              <p><strong>Paso 1.</strong> Factorizamos cada trinomio buscando dos números que multiplicados den el término independiente y sumados den el término medio: x²−3x−4 = (x−4)(x+1) [porque −4·1=−4 y −4+1=−3]. x²−2x−15 = (x−5)(x+3) [porque −5·3=−15 y −5+3=−2].</p>
              <p><strong>Paso 2.</strong> Reescribimos la expresión con las factorizaciones: [(x−4)(x+1) / (x−5)(x+3)] · [(x+3)/(x+1)]</p>
              <p><strong>Paso 3.</strong> Cancelamos los factores que se repiten arriba y abajo: (x+1) se cancela, (x+3) se cancela. Queda (x−4)/(x−5).</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 19 · Examen 2020',
                'texto' => 'Simplifica la siguiente expresión: [(x² − 3x − 4)/(x² − 2x − 15)] · [(x + 3)/(x + 1)]',
                'opciones' => ['(x+3)/(x−5)','(x+5)/(x−4)','(x+4)/(x−5)','(x−4)/(x−5)'],
                'correcta' => 3,
                'explicacion' => 'Ver la demostración de esta capacidad: al factorizar y cancelar (x+1) y (x+3), queda (x−4)/(x−5).'
              ],
              [
                'titulo' => 'Ejercicio 20 · Examen 2020 (fracción compleja)',
                'texto' => 'Adiciona y sustrae las siguientes expresiones algebraicas racionales: [x/(4+x) + (4−x)/x] ÷ [(4+x)/x − x/(4+x)]',
                'opciones' => ['2/(2+x)','(2+x)/2','1/(1+x)','x/(2+x)'],
                'correcta' => 0,
                'explicacion' => 'El numerador: x/(4+x) + (4−x)/x = [x² + (16−x²)] / [x(4+x)] = 16/[x(4+x)]. El denominador: (4+x)/x − x/(4+x) = [(4+x)²−x²]/[x(4+x)] = (16+8x)/[x(4+x)] = 8(2+x)/[x(4+x)]. Dividiendo numerador entre denominador: 16 / [8(2+x)] = 2/(2+x).'
              ],
            ]
          ],

          [
            'cap' => 'Resolver ecuaciones de segundo grado',
            'temas' => ['Ecuaciones completas e incompletas'],
            'teoria' => '
              <h4>Fórmula general</h4>
              <p>Para ax² + bx + c = 0, con a ≠ 0, las soluciones son: x = [−b ± √(b² − 4ac)] / 2a.</p>
              <ul>
                <li>El valor b² − 4ac se llama <strong>discriminante</strong>. Si es positivo, hay dos soluciones reales distintas; si es cero, una solución doble; si es negativo, no hay soluciones reales.</li>
                <li><strong>Ecuación incompleta</strong> sin término b (ax² + c = 0): se despeja x² y se extrae raíz cuadrada a ambos lados.</li>
                <li><strong>Ecuación incompleta</strong> sin término c (ax² + bx = 0): se factoriza x(ax + b) = 0.</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Demostración: de dónde sale la fórmula general (completando el cuadrado)</h4>
              <p>Partimos de ax² + bx + c = 0. Dividimos todo entre a: x² + (b/a)x + c/a = 0.</p>
              <p>Pasamos c/a al otro lado: x² + (b/a)x = −c/a.</p>
              <p>Sumamos (b/2a)² a ambos lados, para completar un trinomio cuadrado perfecto: x² + (b/a)x + (b/2a)² = (b/2a)² − c/a.</p>
              <p>El lado izquierdo ahora es un cuadrado perfecto: (x + b/2a)² = (b² − 4ac)/4a².</p>
              <p>Sacamos raíz cuadrada a ambos lados: x + b/2a = ±√(b² − 4ac) / 2a.</p>
              <p>Despejamos x: x = [−b ± √(b² − 4ac)] / 2a. Esa es la fórmula general.</p>
              <h4>Aplicación: 12x² + 10x − 8 = 0</h4>
              <p>Simplificamos dividiendo entre 2: 6x² + 5x − 4 = 0 (a=6, b=5, c=−4). Discriminante = 5² − 4·6·(−4) = 25 + 96 = 121, y √121 = 11. x = (−5 ± 11)/12, dando x = 1/2 o x = −4/3.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 6 · Examen 2017 (Capital y Central)',
                'texto' => 'El resultado de la ecuación cuadrática 12x² + 10x − 8 = 0 es:',
                'opciones' => ['4/3 y −3/4','1/2 y −4/3','−1/2 y 4/3','1/2 y 5/3'],
                'correcta' => 1,
                'explicacion' => 'Ver la demostración: aplicando la fórmula general con a=6, b=5, c=−4 (tras simplificar entre 2), las soluciones son x = 1/2 y x = −4/3.'
              ],
            ]
          ],

          [
            'cap' => 'Operar con radicales algebraicos',
            'temas' => ['Radicales con monomios y polinomios'],
            'teoria' => '
              <h4>Propiedades usadas al operar radicales</h4>
              <ul>
                <li>ⁿ√a · ⁿ√b = ⁿ√(a·b) &nbsp;&nbsp; ⁿ√a ÷ ⁿ√b = ⁿ√(a÷b)</li>
                <li>Solo se pueden sumar o restar directamente radicales <strong>semejantes</strong> (mismo índice y mismo radicando), sumando o restando sus coeficientes.</li>
                <li>Para sumar radicales distintos, primero se simplifica cada uno extrayendo los factores que sean posibles, para ver si se transforman en radicales semejantes.</li>
                <li>Para resolver una ecuación con radicales, se eleva ambos miembros al exponente igual al índice de la raíz, para "eliminarla", y luego se resuelve la ecuación resultante (verificando después que la solución no genere raíces negativas donde no correspondan).</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Demostración: transformar radicales en semejantes</h4>
              <p>√16xyz − √4xyz − √9xyz + 2√xyz. Cada radical se descompone usando ⁿ√(a·b) = ⁿ√a · ⁿ√b:</p>
              <p>√16xyz = √16 · √xyz = 4√xyz &nbsp;&nbsp; √4xyz = √4 · √xyz = 2√xyz &nbsp;&nbsp; √9xyz = √9 · √xyz = 3√xyz</p>
              <p>Sustituyendo: 4√xyz − 2√xyz − 3√xyz + 2√xyz = (4 − 2 − 3 + 2)√xyz = 1√xyz = √xyz.</p>
              <h4>Demostración: ecuación con radicales</h4>
              <p>√(3x+2) = √(5x−1). Elevamos ambos lados al cuadrado para "quitar" la raíz: 3x + 2 = 5x − 1. Despejamos: 2 + 1 = 5x − 3x → 3 = 2x → x = 3/2. Se verifica reemplazando: √(3·1,5+2)=√6,5 y √(5·1,5−1)=√6,5 ✓.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 22 · Examen 2020',
                'texto' => 'Extrae los factores que sea posible y resuelve: √16xyz − √4xyz − √9xyz + 2√xyz',
                'opciones' => ['xyz','2√xyz','−√xyz','√xyz'],
                'correcta' => 3,
                'explicacion' => 'Cada radical se transforma en un múltiplo de √xyz (ver demostración): 4√xyz − 2√xyz − 3√xyz + 2√xyz = √xyz.'
              ],
              [
                'titulo' => 'Ejercicio 24 · Examen 2020',
                'texto' => 'Resuelve la ecuación: √(3x + 2) = √(5x − 1)',
                'opciones' => ['3/8','3/2','−8/3','2/3'],
                'correcta' => 1,
                'explicacion' => 'Al elevar ambos miembros al cuadrado, se eliminan las raíces: 3x + 2 = 5x − 1. Despejando: 3 = 2x → x = 3/2.'
              ],
            ]
          ],
        ]
      ],

      [
        'titulo' => 'Bloque 3 · Geometría y Medidas',
        'capacidades' => [

          [
            'cap' => 'Comprender geometría plana',
            'temas' => ['Ángulos: clasificación (agudo, recto, obtuso, llano, nulo)','Ángulos complementarios y suplementarios','Sistema sexagesimal'],
            'teoria' => '
              <h4>Clasificación de ángulos</h4>
              <ul>
                <li><strong>Nulo</strong>: 0°. <strong>Agudo</strong>: entre 0° y 90°. <strong>Recto</strong>: 90°. <strong>Obtuso</strong>: entre 90° y 180°. <strong>Llano</strong>: 180°.</li>
                <li><strong>Complementarios</strong>: suman 90°. <strong>Suplementarios</strong>: suman 180°.</li>
              </ul>
              <h4>Sistema sexagesimal</h4>
              <p>Mide ángulos en grados (°), minutos (\') y segundos ("), donde 1° = 60\' y 1\' = 60". Es "sexagesimal" porque su base de conversión es 60, igual que las horas del reloj.</p>
              <h4>Rectas paralelas cortadas por una secante</h4>
              <p>Cuando dos rectas paralelas son cortadas por una tercera recta (secante), se forman 8 ángulos con estas relaciones:</p>
              <ul>
                <li><strong>Correspondientes</strong> y <strong>alternos</strong> (internos o externos): son iguales entre sí.</li>
                <li><strong>Co-interiores</strong> (o conjugados internos, del mismo lado de la secante): son suplementarios, es decir, suman 180°.</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Demostración: por qué los co-interiores suman 180°</h4>
              <p>Si a // b y s es la secante, el ángulo que forma s con la recta a es igual (por ser alterno interno) al ángulo opuesto que forma con la recta b. Y ese ángulo, junto con su co-interior sobre la misma recta b, forman un ángulo llano (180°), porque están uno junto al otro sobre la misma recta. Por lo tanto, el ángulo original y el co-interior también deben sumar 180°.</p>
              <h4>Aplicación numérica</h4>
              <p>Si un ángulo mide 3x−30° y su co-interior mide x+20°, entonces: (3x−30) + (x+20) = 180 → 4x − 10 = 180 → 4x = 190 → x = 47,5. Reemplazando: 3(47,5)−30 = 112,5° y (47,5)+20 = 67,5°. Como control: 112,5 + 67,5 = 180 ✓.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 13 · Examen 2020',
                'texto' => 'Dos rectas paralelas a // b son cortadas por una secante s. Un ángulo mide 3x − 30° y su ángulo co-interior mide x + 20°. Calcula la medida de los cuatro ángulos.',
                'opciones' => ['112,5 – 67,5 – 112,5 – 67,5','45 – 125 – 45 – 125','115 – 65 – 115 – 65','120 – 60 – 120 – 60'],
                'correcta' => 0,
                'explicacion' => 'Ver la demostración: al ser co-interiores, los ángulos son suplementarios, lo que da x = 47,5 y los ángulos 112,5° y 67,5°, repitiéndose alrededor de las dos paralelas.'
              ],
            ]
          ],

          [
            'cap' => 'Comprender geometría del espacio',
            'temas' => ['Triángulos: clasificación por lados y ángulos','Triángulo rectángulo','Teorema de Pitágoras','Cuadriláteros: cuadrado, rectángulo, trapecio, rombo, paralelogramo','Circunferencia: elementos'],
            'teoria' => '
              <h4>Clasificación de triángulos</h4>
              <p>Por lados: <strong>equilátero</strong> (3 lados iguales), <strong>isósceles</strong> (2 lados iguales), <strong>escaleno</strong> (todos distintos). Por ángulos: <strong>acutángulo</strong>, <strong>rectángulo</strong> (un ángulo de 90°), <strong>obtusángulo</strong>.</p>
              <h4>Desigualdad triangular</h4>
              <p>Para que tres segmentos formen un triángulo, la suma de las dos longitudes menores debe ser <strong>mayor</strong> que la longitud mayor. Si la suma es igual o menor, no puede formarse un triángulo.</p>
              <h4>Teorema de Pitágoras</h4>
              <p>En todo triángulo rectángulo, el cuadrado de la hipotenusa es igual a la suma de los cuadrados de los catetos: <strong>a² + b² = h²</strong>, donde h es la hipotenusa (el lado opuesto al ángulo recto) y a, b son los catetos.</p>
            ',
            'demostracion' => '
              <h4>Demostración clásica del Teorema de Pitágoras (por áreas)</h4>
              <p>Se dibuja un cuadrado grande de lado (a + b), y dentro se acomodan 4 triángulos rectángulos idénticos (catetos a y b, hipotenusa h), dejando en el centro un cuadrado más pequeño de lado h.</p>
              <p>El área del cuadrado grande, calculada de dos formas distintas, tiene que dar el mismo resultado:</p>
              <p><strong>Forma 1</strong> (lado al cuadrado): (a + b)² = a² + 2ab + b²</p>
              <p><strong>Forma 2</strong> (suma de las 4 áreas de los triángulos + el cuadrado central): 4·(a·b/2) + h² = 2ab + h²</p>
              <p>Igualando ambas formas: a² + 2ab + b² = 2ab + h². Restando 2ab de ambos lados: <strong>a² + b² = h²</strong>. Queda demostrado.</p>
              <h4>Aplicación: terna 3-4-5</h4>
              <p>3² + 4² = 9 + 16 = 25 = 5². Por eso 3, 4 y 5 forman un triángulo rectángulo exacto, usado muchísimo en problemas.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 14 · Examen 2020',
                'texto' => 'Subraya la respuesta incorrecta: todos los grupos representan un triángulo, EXCEPTO:',
                'opciones' => ['7 cm, 7 cm y 15 cm','7 cm, 7 cm y 10 cm','5 cm, 12 cm y 13 cm','7 cm, 13 cm y 7 cm'],
                'correcta' => 0,
                'explicacion' => 'Aplicando la desigualdad triangular: en 7, 7 y 15, la suma de los dos lados menores es 7+7=14, que es MENOR que 15. Por lo tanto, esos tres segmentos no pueden formar un triángulo.'
              ],
              [
                'titulo' => 'Ejercicio 26 · Examen 2020',
                'texto' => 'Si los lados de un triángulo rectángulo son números consecutivos, ¿cuánto mide su hipotenusa?',
                'opciones' => ['3','4','5','−1'],
                'correcta' => 2,
                'explicacion' => 'Se busca una terna de enteros consecutivos que cumpla el Teorema de Pitágoras: 3² + 4² = 25 = 5². La hipotenusa (el lado mayor) mide 5.'
              ],
            ]
          ],

          [
            'cap' => 'Calcular perímetros y áreas de figuras planas',
            'temas' => ['Polígonos inscriptos en una circunferencia'],
            'teoria' => '
              <h4>Perímetro y área del rectángulo</h4>
              <p>Perímetro: P = 2(largo + ancho). Área: A = largo × ancho.</p>
              <p>Cuando un problema da el perímetro y el área de un rectángulo y pide sus dimensiones, conviene plantear un sistema: una ecuación con el perímetro y otra con el área, despejar una variable de la primera y sustituirla en la segunda (queda una ecuación cuadrática).</p>
            ',
            'demostracion' => '
              <h4>Demostración: hallar largo y ancho conociendo P y A</h4>
              <p>Perímetro 7 m, área 3 m². Del perímetro: 2(l + w) = 7 → l + w = 3,5 → w = 3,5 − l.</p>
              <p>Sustituimos en el área: l · (3,5 − l) = 3 → 3,5l − l² = 3 → l² − 3,5l + 3 = 0.</p>
              <p>Aplicamos la fórmula general (a=1, b=−3,5, c=3): l = [3,5 ± √(12,25 − 12)]/2 = [3,5 ± 0,5]/2, dando l = 2 o l = 1,5.</p>
              <p>Si l = 2, entonces w = 3,5 − 2 = 1,5. Las dimensiones son 2 m y 1,5 m.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 25 · Examen 2020',
                'texto' => 'Un rectángulo mide 7 m de perímetro y 3 m² de superficie. Calcula las medidas de su largo y su ancho.',
                'opciones' => ['3 y 1,5','2 y 1,5','2 y 2,5','2,5 y 1'],
                'correcta' => 1,
                'explicacion' => 'Ver la demostración: planteando el sistema perímetro/área y resolviendo la ecuación cuadrática resultante, las dimensiones son 2 y 1,5.'
              ],
            ]
          ],

          [
            'cap' => 'Calcular áreas y volúmenes de cuerpos geométricos',
            'temas' => ['Cubo, prisma, pirámide, cilindro, cono, esfera','Área lateral, área total, volumen y capacidad'],
            'teoria' => '
              <h4>Fórmulas principales</h4>
              <ul>
                <li><strong>Cilindro</strong>: Volumen = π · r² · h (r = radio de la base, h = altura). Área total = 2πr² + 2πrh. La circunferencia de la base mide 2πr.</li>
                <li><strong>Cono</strong>: Área total = π·r·(r + g), donde g es la generatriz (el lado inclinado). Volumen = (1/3)·π·r²·h.</li>
                <li><strong>Pirámide</strong>: Volumen = (1/3) · Área de la base · altura.</li>
              </ul>
              <p>La <strong>capacidad</strong> de un recipiente suele expresarse en litros; recordar que 1 dm³ = 1 litro, y 1 m³ = 1000 litros.</p>
            ',
            'demostracion' => '
              <h4>Demostración (idea intuitiva): por qué el cono y la pirámide llevan 1/3</h4>
              <p>Si se llena un cono con agua y se vacía dentro de un cilindro con la misma base y altura, hacen falta exactamente <strong>3 conos llenos</strong> para llenar el cilindro completo. Por eso el volumen del cono es un tercio del volumen del cilindro que lo "envuelve" (misma base, misma altura): V<sub>cono</sub> = (1/3)·π·r²·h. Lo mismo ocurre entre una pirámide y el prisma que la envuelve.</p>
              <h4>Aplicación: cilindro cuya altura = circunferencia de la base</h4>
              <p>2πr = 125,66 → r = 125,66 / (2π) ≈ 20 cm. Volumen = π · r² · h = π · 20² · 125,66 ≈ 157.913 cm³. Como 1000 cm³ = 1 litro, la capacidad es ≈ 158 litros.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 27 · Examen 2020',
                'texto' => 'Un cilindro tiene por altura la misma longitud que la circunferencia de su base, y la altura mide 125,66 cm. Halla su capacidad (en litros).',
                'opciones' => ['155','156','159','158'],
                'correcta' => 3,
                'explicacion' => 'Ver la demostración: se obtiene r ≈ 20 cm, y el volumen ≈ 157.913 cm³ ≈ 158 litros.'
              ],
              [
                'titulo' => 'Ejercicio 28 · Examen 2020',
                'texto' => 'Halla el área total de un cono cuya generatriz mide 13 cm y el radio de la base es de 5 cm.',
                'opciones' => ['280,7 cm²','300,7 cm²','282,7 cm²','285,7 cm²'],
                'correcta' => 2,
                'explicacion' => 'Área total = π·r·(r+g) = π · 5 · (5+13) = π · 5 · 18 = 90π ≈ 282,7 cm².'
              ],
              [
                'titulo' => 'Ejercicio 29 · Examen 2020',
                'texto' => 'La pirámide de Keops tiene por base un cuadrado de aproximadamente 230,35 m de lado y una altura de 146,61 m. Calcula su volumen.',
                'opciones' => ['1.650.418,75 m³','2.593.091,06 m³','3.889.645,40 m³','2.475.628,13 m³'],
                'correcta' => 1,
                'explicacion' => 'Área de la base = 230,35² ≈ 53.061,12 m². Volumen = (1/3) · 53.061,12 · 146,61 ≈ 2.593.091,06 m³.'
              ],
            ]
          ],
        ]
      ],

      [
        'titulo' => 'Bloque 4 · Estadística',
        'capacidades' => [

          [
            'cap' => 'Calcular medidas de tendencia central',
            'temas' => ['Media, mediana y moda (para datos no agrupados)'],
            'teoria' => '
              <h4>Media aritmética</h4>
              <p>Se suman todos los datos y se divide entre la cantidad de datos: x̄ = (Σx) / n.</p>
              <h4>Mediana</h4>
              <p>Se ordenan los datos de menor a mayor. Si la cantidad de datos es impar, la mediana es el valor central. Si es par, es el promedio de los dos valores centrales.</p>
              <h4>Moda</h4>
              <p>Es el valor que más se repite en el conjunto de datos. Puede no existir (si todos los valores tienen la misma frecuencia) o haber más de una (bimodal, multimodal).</p>
            ',
            'demostracion' => '
              <h4>Demostración con un conjunto nuevo de datos</h4>
              <p>Datos: 7, 3, 9, 3, 5, 7, 3, 8.</p>
              <p><strong>Media</strong>: suma = 7+3+9+3+5+7+3+8 = 45; cantidad = 8; media = 45/8 = 5,625.</p>
              <p><strong>Mediana</strong>: ordenamos: 3, 3, 3, 5, 7, 7, 8, 9. Como son 8 datos (par), la mediana es el promedio de los dos centrales (posiciones 4 y 5): (5+7)/2 = 6.</p>
              <p><strong>Moda</strong>: el valor "3" aparece 3 veces, más que cualquier otro. La moda es 3.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 1 · Examen 2020',
                'texto' => 'Las puntuaciones de nueve estudiantes en una prueba de habilidades matemáticas fueron: 5, 4, 4, 2, 3, 5, 6, 5, 6. Determina la mediana.',
                'opciones' => ['5','4','6','3'],
                'correcta' => 0,
                'explicacion' => 'Ordenando los 9 datos: 2, 3, 4, 4, 5, 5, 5, 6, 6. Como hay 9 datos (cantidad impar), la mediana es el valor central, es decir, el quinto dato: 5.'
              ],
              [
                'titulo' => 'Ejercicio 30 · Examen 2020',
                'texto' => 'Se encuestaron 30 niños en edad escolar y se registró su peso en kilogramos. Determina la media aritmética de los pesos.',
                'opciones' => ['30','33','32','35'],
                'correcta' => 3,
                'explicacion' => 'Se suman los 30 valores registrados (la suma total es 1039) y se divide entre 30 datos: 1039 ÷ 30 ≈ 34,6, que redondeado corresponde a la opción 35.'
              ],
            ]
          ],

          [
            'cap' => 'Representar datos gráficamente',
            'temas' => ['Tablas de frecuencia','Polígonos de frecuencia','Gráficos circulares'],
            'teoria' => '
              <h4>Tabla de frecuencias</h4>
              <p>Organiza los datos según cuántas veces aparece cada valor (<strong>frecuencia absoluta</strong>) y qué porcentaje representa del total (<strong>frecuencia relativa</strong> o porcentual): frecuencia relativa = (frecuencia absoluta / total) × 100.</p>
              <h4>Gráfico circular (de torta)</h4>
              <p>Representa cada categoría como una porción de un círculo, proporcional a su porcentaje del total. Toda la circunferencia representa el 100% de los datos, equivalente a 360°.</p>
              <h4>Polígono de frecuencias</h4>
              <p>Es un gráfico de líneas que une los puntos correspondientes a la frecuencia de cada valor o intervalo, permitiendo visualizar la tendencia de los datos.</p>
            ',
            'demostracion' => '
              <h4>Demostración: de porcentaje a grados en un gráfico circular</h4>
              <p>Si el 25% de 200 estudiantes prefiere Matemática, primero hallamos la cantidad: (25/100) × 200 = 50 estudiantes.</p>
              <p>Para saber cuántos grados ocupa esa porción del círculo: como 100% = 360°, entonces 25% = (25/100) × 360° = 90°. Esa porción del gráfico circular sería un cuarto de círculo exacto (90° es un ángulo recto).</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio elaborado a partir del temario',
                'texto' => 'En un gráfico circular se representan las preferencias de 200 estudiantes por materia. Si a Matemática le corresponde el 25% del gráfico, ¿cuántos estudiantes prefieren Matemática?',
                'opciones' => ['25','50','75','100'],
                'correcta' => 1,
                'explicacion' => 'El 25% de 200 se calcula como (25/100) × 200 = 0,25 × 200 = 50 estudiantes.'
              ],
            ]
          ],
        ]
      ],
    ]
  ],

  // =====================================================================
  // ÁREA 2 — LENGUA Y LITERATURA CASTELLANA
  // =====================================================================
  [
    'id' => 'lengua',
    'numero' => '02',
    'nombre' => 'Lengua y Literatura Castellana',
    'color' => 'len',
    'bloques' => [

      [
        'titulo' => 'Bloque 1 · Comprensión de Textos',
        'capacidades' => [

          [
            'cap' => 'Analizar tipos de textos',
            'temas' => ['Tipologías textuales: informativos, expositivos, publicitarios, literarios, argumentativos, jurídico-administrativos (Constitución, cartas, memorándum)','Funciones del lenguaje'],
            'teoria' => '
              <h4>Tipologías textuales</h4>
              <ul>
                <li><strong>Narrativo</strong>: relata hechos o sucesos, con personajes y una secuencia temporal.</li>
                <li><strong>Descriptivo</strong>: presenta características de personas, objetos o lugares, respondiendo "cómo es".</li>
                <li><strong>Expositivo/informativo</strong>: explica un tema de forma objetiva, sin opinar.</li>
                <li><strong>Argumentativo</strong>: defiende una postura con razones (argumentos) y busca persuadir o cambiar la opinión del lector.</li>
                <li><strong>Publicitario</strong>: busca convencer al receptor de consumir un producto o adoptar una conducta, combinando función apelativa y persuasiva.</li>
                <li><strong>Jurídico-administrativo</strong>: regula trámites o normas (leyes, memorándums, cartas formales), con lenguaje formal y preciso.</li>
              </ul>
              <h4>Funciones del lenguaje</h4>
              <ul>
                <li><strong>Referencial</strong>: informa sobre la realidad de forma objetiva.</li>
                <li><strong>Emotiva</strong>: expresa sentimientos o estados de ánimo del emisor.</li>
                <li><strong>Apelativa</strong>: busca una reacción en el receptor (órdenes, consejos, persuasión).</li>
                <li><strong>Poética</strong>: se centra en la forma/estética del mensaje mismo.</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: cómo determinar la tipología de un texto</h4>
              <p><strong>Paso 1.</strong> Preguntar: ¿el texto solo informa hechos objetivos (expositivo), o defiende una postura con razones e intenta convencer (argumentativo)?</p>
              <p><strong>Paso 2.</strong> Buscar marcas de opinión o valoración ("es importante que", "resulta erróneo pensar que"): si aparecen, es una señal de texto argumentativo.</p>
              <p><strong>Paso 3.</strong> Aplicado al texto "Autoestima": el autor no solo describe qué es la autoestima, sino que corrige activamente una idea equivocada y da razones para sostener su punto de vista ("es el miedo lo que nos hace…"). Por eso su función predominante es argumentativa, y no simplemente expositiva.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 1 · Examen 2017 (texto "Autoestima")',
                'texto' => 'La tipología del texto "Autoestima", según su función predominante, es:',
                'opciones' => ['Periodístico','Argumentativo','Narrativo','Literario'],
                'correcta' => 1,
                'explicacion' => 'El texto defiende una postura (qué es realmente la autoestima) y busca convencer al lector con razonamientos, sin limitarse a narrar hechos ni solo informar: por eso su función predominante es argumentativa.'
              ],
              [
                'titulo' => 'Ejercicio 2 · Examen 2017',
                'texto' => 'La intención comunicativa que persigue el texto "Autoestima" es:',
                'opciones' => ['Que somos seres completos con carácter fuerte','Pensar en el fenómeno de consciencia','Recurrir a la violencia como forma de protegernos','Comprender el significado real de la autoestima'],
                'correcta' => 3,
                'explicacion' => 'Todo el texto gira en torno a corregir una idea equivocada sobre la autoestima; su propósito comunicativo central es que el lector comprenda su significado real.'
              ],
            ]
          ],

          [
            'cap' => 'Analizar significado de palabras en contexto',
            'temas' => ['Sinónimos, antónimos','Inferencia por contexto','Campo semántico','Hipónimos e hiperónimos'],
            'teoria' => '
              <h4>Inferir significado por contexto</h4>
              <p>Cuando una palabra tiene varios significados posibles, se determina cuál corresponde leyendo la oración completa y buscando pistas (palabras cercanas, sentido general del párrafo).</p>
              <h4>Hipónimos e hiperónimos</h4>
              <p>Un <strong>hiperónimo</strong> es una palabra de significado general que incluye a otras más específicas (<strong>hipónimos</strong>). Ejemplo: "flor" es hiperónimo de "rosa", "clavel", "margarita".</p>
              <h4>Campo semántico</h4>
              <p>Conjunto de palabras relacionadas por pertenecer a un mismo ámbito de significado (ej.: "pupitre", "pizarra", "tiza" pertenecen al campo semántico de la escuela).</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: inferir el significado de "temple" en contexto</h4>
              <p><strong>Paso 1.</strong> Localizar la oración exacta: "...no tiene el temple necesario para lidiar con la fuente de su miedo".</p>
              <p><strong>Paso 2.</strong> Identificar qué tipo de palabra encajaría ahí: algo que se "tiene o no se tiene" para poder "lidiar" (enfrentar) una dificultad emocional.</p>
              <p><strong>Paso 3.</strong> Descartar opciones lejanas: "pasividad" y "violencia" no encajan con la idea de enfrentar algo con serenidad; "capacidad" es genérico. "Equilibrio" (entereza, serenidad interior) es la que mejor completa el sentido de la oración.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 3 · Examen 2017',
                'texto' => 'En el texto "Autoestima" se lee: "...no tiene el temple necesario para lidiar con la fuente de su miedo". En ese contexto, la palabra "temple" significa:',
                'opciones' => ['Pasividad','Equilibrio','Violencia','Capacidad'],
                'correcta' => 1,
                'explicacion' => 'Por el contexto ("lidiar con... su miedo"), "temple" se refiere a la entereza o serenidad interior para enfrentar una dificultad; la opción más cercana a esa idea entre las disponibles es "equilibrio".'
              ],
            ]
          ],

          [
            'cap' => 'Identificar estructura de un texto',
            'temas' => ['Secuencia de ideas','Progresión temática (lineal, constante, derivada, con salto temático)'],
            'teoria' => '
              <h4>Progresión temática</h4>
              <p>Es la forma en que se organiza la información nueva a lo largo de un texto:</p>
              <ul>
                <li><strong>Constante</strong>: se mantiene el mismo tema (tópico) a lo largo de varias oraciones, y solo cambia lo que se dice sobre él (el "comentario").</li>
                <li><strong>Lineal</strong>: el comentario de una oración se convierte en el tema de la siguiente.</li>
                <li><strong>Derivada</strong>: hay un tema general del que se desprenden varios subtemas relacionados.</li>
                <li><strong>Con salto temático</strong>: se introduce abruptamente un tema nuevo, sin conexión directa con lo anterior.</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: identificar el tipo de progresión temática</h4>
              <p><strong>Paso 1.</strong> Subrayar el "tema" (de qué habla) de cada oración de un párrafo.</p>
              <p><strong>Paso 2.</strong> Comparar: si el tema se repite igual en todas las oraciones → progresión constante. Si el "comentario" de una oración pasa a ser el "tema" de la siguiente → progresión lineal.</p>
              <p><strong>Paso 3.</strong> Aplicado al párrafo sobre autoestima: "Una persona con autoestima sana no necesita alterarse... Si opinamos distinto no le afecta...". El tema (la persona con autoestima sana) se mantiene, y solo se agrega información nueva sobre ella: es progresión constante.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio elaborado a partir del temario',
                'texto' => 'Un párrafo introduce el tema "la autoestima" en su primera oración, y todas las oraciones siguientes agregan información sobre ese mismo tema sin cambiarlo. Esta forma de organizar la información se llama progresión temática:',
                'opciones' => ['Lineal','Constante','Con salto temático','Derivada'],
                'correcta' => 1,
                'explicacion' => 'Cuando el mismo tema se mantiene a lo largo de varias oraciones y solo varía lo que se dice sobre él (el comentario), se trata de una progresión temática constante.'
              ],
              [
                'titulo' => 'Ejercicio 8 · Examen 2017',
                'texto' => 'El autor del texto "Autoestima" afirma en el octavo párrafo que cada ser humano:',
                'opciones' => ['Con autoestima no debe alterarse ni levantar la voz','Es la estima de los otros','Busca protección','Es valioso por existir'],
                'correcta' => 3,
                'explicacion' => 'El párrafo final del texto concluye explícitamente que "cada uno de nosotros es valioso por existir", como parte del cierre argumentativo del texto.'
              ],
            ]
          ],

          [
            'cap' => 'Reconocer ideas principales y secundarias',
            'temas' => ['Tema, ideas principales y secundarias','Trama predominante (narrativa, dialogada, expositiva, argumentativa)'],
            'teoria' => '
              <h4>Idea principal vs. ideas secundarias</h4>
              <p>La <strong>idea principal</strong> resume el mensaje central del texto; las <strong>ideas secundarias</strong> lo explican, ejemplifican o matizan, pero podrían quitarse sin que el texto perdiera su sentido esencial.</p>
              <h4>Cómo identificarla</h4>
              <p>Se pregunta: "¿de qué trata realmente todo el texto, más allá de los ejemplos puntuales?". Suele coincidir con lo que se repite o se retoma en la conclusión.</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: separar idea principal de ideas secundarias</h4>
              <p><strong>Paso 1.</strong> Leer el texto completo y anotar de qué trata cada párrafo en una frase corta.</p>
              <p><strong>Paso 2.</strong> Buscar qué idea se repite o se retoma en la introducción y en la conclusión: esa suele ser la idea principal.</p>
              <p><strong>Paso 3.</strong> Aplicado al texto "Autoestima": se repite en el primer párrafo ("percepción... al revés de lo que significa realmente") y en el último ("si llegamos a ser conscientes de esto, nuestra autoestima mejorará"). La idea principal es el concepto erróneo de la autoestima; el mal genio o la heteroestima son ideas secundarias que apoyan ese planteo.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 9 · Examen 2017',
                'texto' => 'La idea central del texto "Autoestima" es:',
                'opciones' => ['El mal genio del carácter','La baja autoestima del ser humano','El concepto erróneo de la autoestima','La heteroestima del ser humano'],
                'correcta' => 2,
                'explicacion' => 'Todo el texto gira en torno a corregir una percepción equivocada sobre qué es la autoestima; los demás temas son ideas secundarias que apoyan esa idea central.'
              ],
              [
                'titulo' => 'Ejercicio 5 · Examen 2017',
                'texto' => 'Conforme al texto, se infiere que una persona con verdadera autoestima:',
                'opciones' => ['Siempre creerá que es la única que merece un premio','Se desespera cuando recibe críticas de las demás personas','Se enfrenta con calma a las adversidades del entorno','Trata con desdén a las personas que no conoce bien'],
                'correcta' => 2,
                'explicacion' => 'El texto sostiene que la autoestima sana genera comodidad interior y no necesita alterarse frente a las críticas o dificultades; por eso se infiere que esa persona enfrenta las adversidades con calma.'
              ],
            ]
          ],

          [
            'cap' => 'Identificar recursos literarios',
            'temas' => ['Personificación, metáfora, sinestesia, repetición, ironía, hipérbole, imágenes sensoriales'],
            'teoria' => '
              <h4>Recursos más frecuentes</h4>
              <ul>
                <li><strong>Personificación</strong>: se atribuyen cualidades humanas a seres no humanos. Ej.: "el viento susurraba".</li>
                <li><strong>Metáfora</strong>: se nombra algo con el nombre de otra cosa por una semejanza implícita. Ej.: "sus ojos son dos luceros".</li>
                <li><strong>Hipérbole</strong>: exageración intencional. Ej.: "te lo dije un millón de veces".</li>
                <li><strong>Sinestesia</strong>: se mezclan sensaciones de distintos sentidos. Ej.: "un silencio verde".</li>
                <li><strong>Ironía</strong>: se dice lo contrario de lo que se piensa, con intención generalmente crítica o humorística.</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: identificar un recurso literario</h4>
              <p><strong>Paso 1.</strong> Leer la frase literalmente: "la ciudad dormía bajo un manto de estrellas".</p>
              <p><strong>Paso 2.</strong> Preguntar: ¿una ciudad puede "dormir" en sentido literal? No, dormir es una acción propia de seres vivos.</p>
              <p><strong>Paso 3.</strong> Como se le atribuye una acción humana/animal a algo que no lo es (la ciudad), el recurso es personificación (y, de forma secundaria, "manto de estrellas" es además una metáfora del cielo nocturno).</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio elaborado a partir del temario',
                'texto' => '¿Qué recurso literario predomina en la frase "la ciudad dormía bajo un manto de estrellas"?',
                'opciones' => ['Hipérbole','Personificación','Ironía','Sinestesia'],
                'correcta' => 1,
                'explicacion' => 'Se le atribuye a la ciudad (algo no humano) la acción de "dormir", que es propia de seres vivos; eso es una personificación.'
              ],
            ]
          ],

          [
            'cap' => 'Reconocer conectores textuales',
            'temas' => ['Conectores de: adición, orden, causalidad, oposición, enumeración, reformulación, conclusión, restricción, continuación, conexión'],
            'teoria' => '
              <h4>Tipos de conectores</h4>
              <ul>
                <li><strong>Adición</strong>: además, también, asimismo.</li>
                <li><strong>Oposición/restricción</strong>: pero, sin embargo, no obstante, sino.</li>
                <li><strong>Causalidad</strong>: porque, ya que, debido a, por lo tanto (consecuencia).</li>
                <li><strong>Orden/enumeración</strong>: primero, luego, finalmente, por un lado / por otro lado.</li>
                <li><strong>Conclusión</strong>: en conclusión, en definitiva, en síntesis.</li>
                <li><strong>Reformulación</strong>: es decir, o sea, dicho de otro modo.</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: clasificar un conector</h4>
              <p><strong>Paso 1.</strong> Ubicar el conector en la oración: "...lejos de representar un carácter verdaderamente fuerte, <u>sino</u> más bien un carácter débil".</p>
              <p><strong>Paso 2.</strong> Preguntar qué relación establece entre las dos ideas que une: ¿suma información (adición), contrapone dos ideas (oposición), o expresa causa?</p>
              <p><strong>Paso 3.</strong> Aquí "sino" contrapone "fortaleza" con "debilidad": es un conector de oposición, no de adición ni de conclusión.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 12 · Examen 2017',
                'texto' => 'En la expresión "lejos de representar un carácter verdaderamente fuerte, sino más bien un carácter débil", el conector subrayado ("sino") indica:',
                'opciones' => ['Orden de ideas','Oposición de expresión','Adición de expresión','Conclusión de ideas'],
                'correcta' => 1,
                'explicacion' => '"Sino" contrapone dos ideas (no es fortaleza, sino debilidad), por lo que funciona como conector de oposición.'
              ],
              [
                'titulo' => 'Ejercicio 10 · Examen 2017',
                'texto' => 'La expresión del texto que enuncia una relación de causa–efecto es:',
                'opciones' => ['"Es el miedo lo que nos hace buscar protección con estrategias de defensa: gritar, golpear la mesa, ofender"','"Si llegamos a ser conscientes de esto, nuestra autoestima mejorará"','"Es conveniente comprender los hechos tal como se producen sin interpretación"','"Es útil aclarar que lo contrario de la autoestima no es la heteroestima"'],
                'correcta' => 0,
                'explicacion' => 'Esta expresión indica que el miedo (causa) provoca la búsqueda de estrategias de defensa (efecto), estableciendo una relación causal explícita.'
              ],
            ]
          ],
        ]
      ],

      [
        'titulo' => 'Bloque 2 · Expresión Escrita',
        'capacidades' => [

          [
            'cap' => 'Aplicar concordancia gramatical',
            'temas' => ['Sustantivos: clases','Núcleo del sujeto y predicado','Sujeto simple y compuesto','Concordancia adjetivo-sustantivo','Oraciones compuestas coordinadas y subordinadas'],
            'teoria' => '
              <h4>Sujeto simple y compuesto</h4>
              <p>El <strong>sujeto simple</strong> tiene un solo núcleo (un sustantivo o pronombre principal). El <strong>sujeto compuesto</strong> tiene dos o más núcleos coordinados (unidos por "y", "o", etc.).</p>
              <h4>Concordancia</h4>
              <p>El adjetivo debe concordar en género y número con el sustantivo al que modifica; el verbo debe concordar en número y persona con el sujeto.</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: identificar el tipo de sujeto</h4>
              <p><strong>Paso 1.</strong> Buscar el verbo conjugado de la oración: "Ese miedo está relacionado a hechos de nuestro entorno" → el verbo es "está relacionado".</p>
              <p><strong>Paso 2.</strong> Preguntar "¿quién está relacionado?" → "Ese miedo".</p>
              <p><strong>Paso 3.</strong> Contar los núcleos del sujeto: hay un solo núcleo ("miedo"), por lo tanto es un sujeto simple (no compuesto, porque no hay dos elementos unidos por "y"/"o"; no tácito, porque está escrito explícitamente).</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 15 · Examen 2017',
                'texto' => 'En la oración "Ese miedo está relacionado a hechos de nuestro entorno", la clase de sujeto que presenta es:',
                'opciones' => ['Sujeto compuesto','Predicado nominal','Sujeto tácito','Sujeto simple'],
                'correcta' => 3,
                'explicacion' => 'El sujeto es "Ese miedo", con un solo núcleo ("miedo"), por lo tanto es un sujeto simple.'
              ],
            ]
          ],

          [
            'cap' => 'Usar tiempos y modos verbales correctamente',
            'temas' => ['Tiempos verbales','Verbos regulares e irregulares','Voz activa y pasiva'],
            'teoria' => '
              <h4>Modo indicativo vs. subjuntivo</h4>
              <p>El <strong>indicativo</strong> expresa hechos reales o certeros ("opino", "opinamos"). El <strong>subjuntivo</strong> expresa duda, deseo o hipótesis ("opine", "opinemos").</p>
              <h4>Voz activa y pasiva</h4>
              <p>En la <strong>voz activa</strong>, el sujeto realiza la acción ("Nosotros tenemos una percepción..."). En la <strong>voz pasiva</strong>, el sujeto recibe la acción, normalmente con el verbo "ser" + participio ("Una percepción... fue tenida por nosotros").</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: convertir de voz activa a pasiva</h4>
              <p><strong>Paso 1.</strong> Identificar sujeto, verbo y objeto directo en la voz activa: "Nosotros (sujeto) tenemos (verbo) una percepción... (objeto directo)".</p>
              <p><strong>Paso 2.</strong> El objeto directo pasa a ser el nuevo sujeto: "Una percepción del concepto de autoestima".</p>
              <p><strong>Paso 3.</strong> El verbo se transforma en "ser" (conjugado igual que el original) + participio del verbo original: "tenemos" → "fue tenida". El sujeto original pasa al final con "por": "...fue tenida por nosotros".</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 11 · Examen 2017',
                'texto' => 'En "Si opinamos distinto no le afecta...", la conjugación del verbo subrayado ("opinamos") está en:',
                'opciones' => ['Tiempo Presente, Modo Indicativo','Pretérito Imperfecto, Modo Indicativo','Tiempo Presente, Modo Subjuntivo','Pretérito Perfecto, Modo Indicativo'],
                'correcta' => 0,
                'explicacion' => '"Opinamos" describe una acción habitual y real (no una duda ni un deseo), en tiempo presente y modo indicativo.'
              ],
              [
                'titulo' => 'Ejercicio 14 · Examen 2017',
                'texto' => 'La opción que presenta el uso de la voz pasiva es:',
                'opciones' => ['Nosotros tenemos una percepción del concepto de autoestima','Una percepción del concepto de autoestima fue tenida por nosotros','Nuestra autoestima permite disminuir la cantidad de cosas','Compréndanme, tengo un carácter fuerte'],
                'correcta' => 1,
                'explicacion' => 'En esta opción el sujeto ("una percepción...") recibe la acción del verbo ("fue tenida"), con la estructura típica "ser + participio + por": es voz pasiva.'
              ],
            ]
          ],

          [
            'cap' => 'Aplicar normas ortográficas',
            'temas' => ['Uso correcto de consonantes con dificultad ortográfica','Acentuación: palabras agudas, llanas, esdrújulas, sobresdrújulas','Acento diacrítico y convencional','Signos de puntuación y auxiliares'],
            'teoria' => '
              <h4>Acentuación</h4>
              <ul>
                <li><strong>Agudas</strong>: acento en la última sílaba; llevan tilde si terminan en n, s o vocal (ej. "café" sí lleva).</li>
                <li><strong>Llanas o graves</strong>: acento en la penúltima sílaba; llevan tilde si NO terminan en n, s o vocal (ej. "árbol", "útil"; "carácter" es llana con tilde por terminar en "r").</li>
                <li><strong>Esdrújulas</strong>: acento en la antepenúltima sílaba; siempre llevan tilde (ej. "fenómeno", "ánimo").</li>
                <li><strong>Sobresdrújulas</strong>: acento antes de la antepenúltima sílaba; siempre llevan tilde (ej. "cómpramelo").</li>
              </ul>
              <h4>Uso de la coma</h4>
              <p>Se usa para separar elementos de una enumeración (sin ir antes de la conjunción "y" final), para aislar aclaraciones (entre comas) y para separar el vocativo del resto de la oración. No debe colocarse entre el sujeto y el verbo.</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: clasificar palabras por acentuación</h4>
              <p><strong>Paso 1.</strong> Separar cada palabra en sílabas y ubicar la sílaba tónica (la que suena más fuerte). Útil: ú-til (tónica: "ú", penúltima) → llana. Debemos: de-be-mos (tónica: "mos", última, termina en s, no lleva tilde por eso) → aguda... pero cuidado, "debemos" en realidad es llana (de-BE-mos), verificar siempre contando sílabas desde el final.</p>
              <p><strong>Paso 2.</strong> Comparar las 4 palabras de cada opción: si todas tienen su acento en la penúltima sílaba, la serie es toda llana. "Útil – debemos – carácter – miedo": las cuatro son llanas.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 13 · Examen 2017',
                'texto' => '¿Cuál es la única serie compuesta enteramente por palabras llanas o graves?',
                'opciones' => ['Pensar – estrategias – interpretación – realidad','Ánimo – compréndanme – fenómeno – carácter','Útil – debemos – carácter – miedo','Pesar – implica – carácter – fenómeno'],
                'correcta' => 2,
                'explicacion' => '"Útil", "debemos", "carácter" y "miedo" tienen su acento en la penúltima sílaba, es decir, son todas llanas.'
              ],
              [
                'titulo' => 'Ejercicio 17 · Examen 2017',
                'texto' => 'El único enunciado que posee el uso correcto de la coma es:',
                'opciones' => ['Mi hermano mayor estudia, electrónica, la menor mecánica automotriz.','El, futbolista exhausto se hizo un tiempo, para hablar con la prensa.','Suspendida la fiesta decidimos ir, a casa y divertirnos igual.','Faltaría que traigan platos, cubiertos, gaseosa y vino.'],
                'correcta' => 3,
                'explicacion' => 'En esta opción la coma separa correctamente los elementos de una enumeración sin colocarse antes de la "y" final ni entre el sujeto y el verbo.'
              ],
            ]
          ],

          [
            'cap' => 'Utilizar recursos de cohesión',
            'temas' => ['Sustituciones léxicas y elipsis','Uso de conectores para relacionar ideas'],
            'teoria' => '
              <h4>Referencia anafórica</h4>
              <p>Palabras como "esto", "eso", "el mismo", "dicha situación" reemplazan a algo mencionado anteriormente en el texto, evitando repeticiones. A esto se le llama <strong>anáfora</strong> o sustitución léxica/pronominal.</p>
              <h4>Elipsis</h4>
              <p>Consiste en omitir una palabra o frase que ya se sobreentiende por el contexto, sin que el texto pierda claridad.</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: rastrear una referencia anafórica</h4>
              <p><strong>Paso 1.</strong> Ubicar la palabra en cuestión: "...disminuir la cantidad de cosas que aparecen amenazantes allá afuera. <u>Esto</u> implica pensar...".</p>
              <p><strong>Paso 2.</strong> Preguntar: ¿"Esto" se refiere a algo dicho antes, o a algo que se va a decir después?</p>
              <p><strong>Paso 3.</strong> Retomando la oración anterior, "Esto" recoge toda la idea de "disminuir la cantidad de cosas amenazantes"; por lo tanto, remite a una referencia ya mencionada anteriormente (anáfora).</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 16 · Examen 2017',
                'texto' => 'En "...nos permite disminuir la cantidad de cosas que aparecen amenazantes allá afuera. Esto implica pensar...", la palabra subrayada ("Esto") conforme al texto:',
                'opciones' => ['Remite a una referencia dicha posteriormente','Remite a una referencia ya dicha anteriormente','Remite a una referencia no explícita en el texto','Remite a una referencia que está fuera del texto'],
                'correcta' => 1,
                'explicacion' => '"Esto" retoma la idea mencionada en la oración anterior, funcionando como una referencia anafórica hacia algo ya dicho.'
              ],
            ]
          ],
        ]
      ],
    ]
  ],

  // =====================================================================
  // ÁREA 3 — GUARANÍ ÑE'Ẽ
  // =====================================================================
  [
    'id' => 'guarani',
    'numero' => '03',
    'nombre' => "Lengua y Literatura Guaraní Ñe'ẽ",
    'color' => 'gua',
    'bloques' => [

      [
        'titulo' => 'Bloque 1 · Comprensión Oral y Lectura',
        'capacidades' => [

          [
            'cap' => 'Comprender textos orales y escritos',
            'temas' => ['Identificar el tema y el propósito comunicativo'],
            'teoria' => '
              <h4>Tema y propósito comunicativo</h4>
              <p>Al leer o escuchar un moñe\'ẽrã (texto), es importante identificar de qué trata (el <strong>tema</strong>) y para qué fue producido: informar, narrar un hecho histórico, convencer, etc. (el <strong>propósito</strong>).</p>
              <p>Una estrategia útil es fijarse en el primer párrafo, que suele presentar quién es el protagonista y en qué contexto se desarrolla el texto.</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: identificar el propósito de un moñe\'ẽrã</h4>
              <p><strong>Paso 1.</strong> Leer el primer párrafo completo: "Pastora Concepción Céspedes héra peteĩ kuña Paraguái ohova\'ekue ñorairõhápe, pohanoha pytyvõháramo...".</p>
              <p><strong>Paso 2.</strong> Identificar quién es el sujeto (Pastora) y qué hizo (fue a la guerra como ayudante de curandera).</p>
              <p><strong>Paso 3.</strong> A partir de esto se infiere el propósito del texto: contar la historia de una mujer paraguaya que ayudó durante la Guerra del Chaco, con función tanto informativa como de homenaje.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 20 · Examen 2017',
                'texto' => "Mávapa ha'e haipyvo peteĩha kuaarapo (párrafo) — es decir: ¿qué oración corresponde al primer párrafo del texto sobre Pastora Concepción Céspedes?",
                'opciones' => ['Ñane retã oikérõ guare ñorairõme.','Oikohágui upéicha, peteĩ pyharevépe, oñuãhẽ chupe marandu.',"Pastora héra peteĩ kuña Paraguái ohova'ekue ñorairõhápe.",'Pe 1932 guive 1935 peve.'],
                'correcta' => 2,
                'explicacion' => "El primer párrafo del moñe'ẽrã presenta a la protagonista: Pastora Concepción Céspedes, una mujer paraguaya que fue a la guerra como ayudante de curandera."
              ],
            ]
          ],

          [
            'cap' => 'Comprender textos de actualidad',
            'temas' => ['Lectura de diversos tipos de textos sobre temas contemporáneos'],
            'teoria' => '
              <h4>Estrategia de lectura</h4>
              <p>Independientemente de la época del texto (histórico o contemporáneo), conviene leer primero el título y el primer párrafo para anticipar el contenido, y luego releer para identificar detalles y responder preguntas específicas.</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: responder por qué ocurrió algo en el texto</h4>
              <p><strong>Paso 1.</strong> Ubicar en el texto la razón explícita o implícita de una acción (por ejemplo, por qué Pastora fue a la guerra).</p>
              <p><strong>Paso 2.</strong> El texto dice que fue "pohanoha pytyvõháramo" (como ayudante de curandera), lo que indica su motivo: ayudar en la atención de los heridos, no participar en el combate directo.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 28 · Examen 2017',
                'texto' => "Ñe'ẽjoaju ombohovái porãvéva porandu mba'érehepa Pastora Concepción Céspedes ohova'ekue ñorairõhápe ha'e — ¿cuál oración responde mejor por qué Pastora fue a la guerra?",
                'opciones' => ['Oikuaaségui Chaco rugua', "Oikuaaségui mba'éichapa ñorairõ", 'Oipytyvõségui pohanohárape', 'Oipurukuaaségui mboka'],
                'correcta' => 2,
                'explicacion' => "El texto indica que Pastora fue como pytyvõhára (ayudante) de una pohanoha (curandera); por lo tanto, fue porque quería ayudar en la atención de los heridos."
              ],
            ]
          ],

          [
            'cap' => 'Comprender significado de palabras polisémicas',
            'temas' => ['Palabras que tienen varios significados según el contexto'],
            'teoria' => '
              <h4>Polisemia</h4>
              <p>Una palabra polisémica tiene más de un significado posible; el contexto de la oración determina cuál corresponde. Por ejemplo, "yvypóra" se refiere de forma general a los seres humanos, aunque literalmente esté compuesta por "yvy" (tierra) + "póra" (habitante).</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: desambiguar una palabra polisémica</h4>
              <p><strong>Paso 1.</strong> Descomponer la palabra si es posible: "yvypóra" = yvy (tierra) + póra (habitante/el que está en).</p>
              <p><strong>Paso 2.</strong> Ver cómo se usa en la oración del texto: se refiere a las personas en general, no a un grupo específico (no solo hombres, ni solo mujeres, ni solo niños).</p>
              <p><strong>Paso 3.</strong> Concluir que, en este contexto, "yvypóra" equivale a "ser humano / persona" en sentido amplio.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 22 · Examen 2017',
                'texto' => "Ko moñe'ẽrãme oje'ẽvo \"yvypóra\", upéva he'ise:",
                'opciones' => ['Avakuéra','Kuñanguéra','Tekove añaita','Mitãnguéra'],
                'correcta' => 2,
                'explicacion' => "En este contexto, \"yvypóra\" se usa con su sentido general de 'ser humano / persona', y no se refiere específicamente a hombres, mujeres o niños."
              ],
            ]
          ],

          [
            'cap' => 'Identificar estructura y elementos del texto',
            'temas' => ['Estructura del texto','Propósito del autor','Elementos que ayudan a la comprensión lectora'],
            'teoria' => '
              <h4>Título alternativo</h4>
              <p>Poder proponer un título alternativo para un texto demuestra que se comprendió su idea central y no solo detalles sueltos.</p>
              <h4>Sinónimos dentro del texto</h4>
              <p>Reconocer qué otra palabra del propio texto significa lo mismo que un término dado ayuda a verificar la comprensión del vocabulario en contexto.</p>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: proponer un título alternativo</h4>
              <p><strong>Paso 1.</strong> Resumir de qué trata el texto en una sola frase: "una mujer paraguaya que ayudó como curandera durante la guerra".</p>
              <p><strong>Paso 2.</strong> Comparar esa idea con las opciones de título disponibles, descartando las que no representan el contenido general (por ejemplo, títulos sobre "mala conducta" no encajan con una historia de ayuda y sacrificio).</p>
              <p><strong>Paso 3.</strong> "Kuña Paraguái" (mujer paraguaya) resume mejor el contenido que las demás opciones.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio 19 · Examen 2017',
                'texto' => "Mba'éichapa avei ikatu ambohéra ko moñe'ẽrã? (¿de qué otra manera se puede titular este texto?)",
                'opciones' => ['Sy ha aña','Kuña Paraguái','Kuñakaraí reko vai',"Kuimba'e rekovekue"],
                'correcta' => 1,
                'explicacion' => "El texto trata sobre una mujer paraguaya (kuña Paraguái) que se destacó por su labor durante la guerra; ese título resume mejor el contenido que las otras opciones."
              ],
              [
                'titulo' => 'Ejercicio 23 · Examen 2017',
                'texto' => "Ñe'ẽ \"imemby\" he'isejojáva (sinónimo) ko moñe'ẽrãme ha'e:",
                'opciones' => ['Itajýra','Iñemoñare','Hemiariró','Itaitachu'],
                'correcta' => 1,
                'explicacion' => "\"Imemby\" (su hijo/a) tiene como sinónimo más general en el texto a \"iñemoñare\" (su descendiente)."
              ],
            ]
          ],
        ]
      ],

      [
        'titulo' => "Bloque 2 · Expresión Oral y Escrita",
        'capacidades' => [

          [
            'cap' => 'Expresar ideas con claridad',
            'temas' => ['Demostrar comprensión al hablar sobre textos leídos o escuchados'],
            'teoria' => '
              <h4>Vocabulario básico de uso cotidiano</h4>
              <p>Expresarse con claridad en guaraní requiere manejar con seguridad los saludos y expresiones más frecuentes de la conversación diaria.</p>
              <table style="width:100%;border-collapse:collapse;margin-top:10px;font-size:.9rem;">
                <tr><td style="padding:4px 8px;border-bottom:1px solid #ddd;"><strong>Mba\'éichapa</strong></td><td style="padding:4px 8px;border-bottom:1px solid #ddd;">¿Cómo estás?</td></tr>
                <tr><td style="padding:4px 8px;border-bottom:1px solid #ddd;"><strong>Aguyje</strong></td><td style="padding:4px 8px;border-bottom:1px solid #ddd;">Gracias</td></tr>
                <tr><td style="padding:4px 8px;"><strong>Ñande</strong></td><td style="padding:4px 8px;">Nosotros (incluyente)</td></tr>
              </table>
            ',
            'demostracion' => '
              <h4>Modelo de uso: un breve intercambio cotidiano</h4>
              <p>A: "Mba\'éichapa!" (¿Cómo estás?) → B: "Iporã, aguyje. Ha nde?" (Bien, gracias. ¿Y vos?)</p>
              <p>Este breve intercambio combina un saludo, un agradecimiento y una pregunta devuelta, mostrando cómo se encadenan las expresiones básicas en una conversación real.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Vocabulario básico',
                'texto' => "¿Qué significa el saludo \"mba'éichapa\"?",
                'opciones' => ['¿Cómo estás?','Buenos días','Hasta luego','Muchas gracias'],
                'correcta' => 0,
                'explicacion' => "\"Mba'éichapa\" es la forma habitual de preguntar '¿cómo estás?' o '¿cómo te va?' en guaraní."
              ],
            ]
          ],

          [
            'cap' => 'Usar correctamente demostrativos',
            'temas' => ['Demostrativos de lugar y tiempo'],
            'teoria' => '
              <h4>Demostrativos de lugar (ko, pe, amo)</h4>
              <ul>
                <li><strong>Ko</strong>: este/esta, algo cercano a quien habla.</li>
                <li><strong>Pe</strong>: ese/esa, algo cercano a quien escucha o a media distancia.</li>
                <li><strong>Amo</strong>: aquel/aquella, algo lejano de ambos interlocutores.</li>
              </ul>
              <p>Estos demostrativos suelen preceder al sustantivo, igual que en castellano ("este libro" → "ko aranduka").</p>
            ',
            'demostracion' => '
              <h4>Modelo de uso: elegir el demostrativo correcto</h4>
              <p>Si el hablante tiene el libro en la mano: "ko aranduka" (este libro).</p>
              <p>Si el libro está cerca de la persona con la que habla: "pe aranduka" (ese libro).</p>
              <p>Si el libro está lejos de ambos: "amo aranduka" (aquel libro).</p>
              <p>El criterio siempre es la distancia respecto de quién habla y quién escucha, igual que en castellano con "este/ese/aquel".</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio elaborado a partir del temario',
                'texto' => "¿Qué demostrativo se usa en guaraní para referirse a algo lejano de ambos interlocutores (equivalente a 'aquel/aquella')?",
                'opciones' => ['Ko','Pe','Amo','Upe'],
                'correcta' => 2,
                'explicacion' => "\"Amo\" se usa para señalar algo distante tanto de quien habla como de quien escucha, equivalente a 'aquel/aquella' en castellano."
              ],
            ]
          ],

          [
            'cap' => 'Aplicar normas ortográficas del guaraní',
            'temas' => ['Uso correcto de letras','Uso de tildes','Concordancia morfológica'],
            'teoria' => '
              <h4>Grafías propias del guaraní</h4>
              <ul>
                <li>El guaraní usa <strong>vocales nasales</strong>, marcadas con tilde de virgulilla: ã, ẽ, ĩ, õ, ũ, ỹ.</li>
                <li>El <strong>puso</strong> (apóstrofo \' ) representa un sonido de corte glotal, como en "mba\'e" (cosa).</li>
                <li>La letra <strong>g̃</strong> (g con tilde) representa un sonido nasalizado propio del guaraní, distinto de la "g" del castellano.</li>
              </ul>
            ',
            'demostracion' => '
              <h4>Modelo de análisis: reconocer el puso en una palabra</h4>
              <p>En "mba\'e" (cosa), el apóstrofo marca una pequeña pausa/corte en la pronunciación entre "mba" y "e", que cambia el sonido de la palabra. Sin el puso, la palabra se leería de forma distinta y perdería su significado correcto.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Ejercicio elaborado a partir del temario',
                'texto' => "¿Qué signo ortográfico representa el corte glotal en palabras guaraníes como \"mba'e\"?",
                'opciones' => ['La tilde (´)','El apóstrofo o puso (\')','La diéresis (¨)','La virgulilla (~)'],
                'correcta' => 1,
                'explicacion' => "El apóstrofo, llamado puso en guaraní, marca un corte glotal (una breve interrupción del sonido) que es un fonema propio de esta lengua."
              ],
            ]
          ],

          [
            'cap' => 'Usar conectores en la escritura',
            'temas' => ["Conectores lógicos y de secuencia (ej. upéva, jahechápa, ýrõ katu, péicha avei)"],
            'teoria' => '
              <h4>Conectores frecuentes en guaraní</h4>
              <ul>
                <li><strong>Ha</strong>: y (adición).</li>
                <li><strong>Katu</strong>: pero / sin embargo (funciona como marcador de contraste).</li>
                <li><strong>Upéicha</strong>: así, de ese modo (consecuencia).</li>
                <li><strong>Upéva</strong>: eso, refiriéndose a algo ya mencionado (relación anafórica).</li>
              </ul>
              <p>Al igual que en castellano, estos conectores ayudan a relacionar ideas dentro de un mismo párrafo o entre distintos párrafos de un moñe\'ẽrã.</p>
            ',
            'demostracion' => '
              <h4>Modelo de uso: encadenar dos ideas con un conector</h4>
              <p>"Pastora ohova\'ekue ñorairõhápe <strong>ha</strong> oipytyvõ heta mymbápe." (Pastora fue a la guerra y ayudó a mucha gente.) — Acá "ha" suma dos acciones de la misma persona.</p>
              <p>"Iporãiterei pe tembi\'u, <strong>katu</strong> ndarekói viru." (La comida está muy rica, pero no tengo dinero.) — Acá "katu" contrapone dos ideas.</p>
            ',
            'ejemplos' => [
              [
                'titulo' => 'Vocabulario básico de conectores',
                'texto' => "¿Cuál palabra guaraní funciona como conector de adición, equivalente a 'y' en castellano?",
                'opciones' => ['Ha','Térã','Katu','Upéi'],
                'correcta' => 0,
                'explicacion' => "\"Ha\" es el conector de adición más básico y frecuente en guaraní, equivalente a 'y' en castellano."
              ],
            ]
          ],
        ]
      ],
    ]
  ],
];
