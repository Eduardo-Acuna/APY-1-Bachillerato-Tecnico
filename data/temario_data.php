<?php
/**
 * Temario completo para el Examen de Admisión — Bachillerato Técnico 2026
 * Fuente: material oficial de estudio proporcionado por el usuario.
 * Cada capacidad ahora tiene un campo 'teoria' con el contenido explicativo.
 */
$temario = [
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
            'teoria' => '<h4>📌 Fracción generatriz</h4><p>Para convertir un decimal periódico a fracción:</p><ul><li><strong>Periódico puro:</strong> 0,666... = 6/9 = 2/3</li><li><strong>Periódico mixto:</strong> 0,0555... = (55−5)/90 = 50/90 = 5/9</li></ul><h4>📌 Jerarquía de operaciones</h4><ol><li>Paréntesis, corchetes y llaves (de adentro hacia afuera)</li><li>Potenciación y radicación</li><li>Multiplicación y división (de izquierda a derecha)</li><li>Adición y sustracción (de izquierda a derecha)</li></ol><h4>📝 Ejemplo:</h4><p>Calcular: 24 − {14 + 8 · 6 − [(−4)² · 2 − 12]}</p><p><strong>Paso 1:</strong> (−4)² = 16</p><p><strong>Paso 2:</strong> 16 · 2 = 32; 32 − 12 = 20</p><p><strong>Paso 3:</strong> 14 + 48 − 20 = 42</p><p><strong>Paso 4:</strong> 24 − 42 = <strong>−18</strong></p>'
          ],
          [
            'cap' => 'Aplicar potenciación y radicación',
            'temas' => ['Potenciación de enteros y racionales','Radicación de enteros y racionales'],
            'teoria' => '<h4>📌 Propiedades de la potenciación</h4><ul><li><strong>Producto:</strong> a^m · a^n = a^(m+n)</li><li><strong>Cociente:</strong> a^m ÷ a^n = a^(m−n)</li><li><strong>Potencia de potencia:</strong> (a^m)^n = a^(m·n)</li><li><strong>Exponente cero:</strong> a^0 = 1 (a≠0)</li><li><strong>Exponente negativo:</strong> a^(−n) = 1/a^n</li></ul><h4>📌 Propiedades de la radicación</h4><ul><li><strong>Raíz de producto:</strong> √(a·b) = √a · √b</li><li><strong>Raíz de cociente:</strong> √(a/b) = √a / √b</li><li><strong>Raíz de raíz:</strong> ⁿ√(ᵐ√a) = ⁿᵐ√a</li></ul><h4>📝 Ejemplo:</h4><p>2³ · (1/2)⁴ · 3³ = 8 · 1/16 · 27 = 216/16 = <strong>27/2</strong></p>'
          ],
        ]
      ],
      [
        'titulo' => 'Bloque 2 · Álgebra (Expresiones y Ecuaciones)',
        'capacidades' => [
          [
            'cap' => 'Resolver sistemas de ecuaciones lineales',
            'temas' => ['Ecuaciones lineales con una incógnita','Sistemas de 2 ecuaciones con 2 incógnitas'],
            'teoria' => '<h4>📌 Métodos de resolución</h4><ul><li><strong>Sustitución:</strong> Despejar una variable y reemplazar en la otra.</li><li><strong>Igualación:</strong> Despejar la misma variable en ambas ecuaciones e igualar.</li><li><strong>Reducción:</strong> Multiplicar para eliminar una variable.</li></ul><h4>📝 Ejemplo:</h4><p>7x + 4y = 13 ... (1)</p><p>5x − 2y = 19 ... (2)</p><p>Multiplicando (2) por 2: 10x − 4y = 38</p><p>Sumando con (1): 17x = 51 → x = 3</p><p>Reemplazando: 7(3) + 4y = 13 → 21 + 4y = 13 → 4y = −8 → y = −2</p><p><strong>Solución: x = 3, y = −2</strong></p>'
          ],
          [
            'cap' => 'Operar con expresiones algebraicas',
            'temas' => ['Monomios y polinomios','Suma, resta, multiplicación y división de polinomios'],
            'teoria' => '<h4>📌 Suma y resta de polinomios</h4><p>Se suman o restan los coeficientes de los términos semejantes.</p><h4>📝 Ejemplo:</h4><p>(x² + 2xy + y²) + (x² − 2xy + y²) = <strong>2x² + 2y²</strong></p><h4>📌 División de polinomios</h4><p>Se utiliza división larga o Ruffini.</p><h4>📝 Ejemplo:</h4><p>(3x³ − 10x² + 17x − 12) ÷ (x² − 2x + 3) = <strong>3x − 4</strong></p>'
          ],
          [
            'cap' => 'Factorizar expresiones algebraicas',
            'temas' => ['Factor común','Agrupación de términos','Diferencia de cuadrados perfectos','Suma y diferencia de potencias','Trinomio cuadrado perfecto','Cuadrado de un binomio','Trinomios de la forma x² + bx + c y ax² + bx + c','Cuatrinomio cubo perfecto'],
            'teoria' => '<h4>📌 Métodos de factorización</h4><ul><li><strong>Diferencia de cuadrados:</strong> a² − b² = (a+b)(a−b)</li><li><strong>Trinomio cuadrado perfecto:</strong> a² ± 2ab + b² = (a ± b)²</li><li><strong>Factor común:</strong> ab + ac = a(b+c)</li><li><strong>Trinomio x² + bx + c:</strong> Buscar dos números que sumen b y multipliquen c.</li></ul><h4>📝 Ejemplo:</h4><p>x² + 6x + 9 − y² = (x+3)² − y² = <strong>(x+3+y)(x+3−y)</strong></p>'
          ],
          [
            'cap' => 'Operar con expresiones racionales algebraicas',
            'temas' => ['MCD y mcm','Simplificación de fracciones algebraicas','Suma, resta, multiplicación y división de fracciones algebraicas'],
            'teoria' => '<h4>📌 Simplificación de fracciones algebraicas</h4><p>Se factoriza numerador y denominador, y se cancelan factores comunes.</p><h4>📝 Ejemplo:</h4><p>[(x²−3x−4)/(x²−2x−15)] · [(x+3)/(x+1)]</p><p>= [(x−4)(x+1)/(x−5)(x+3)] · [(x+3)/(x+1)] = <strong>(x−4)/(x−5)</strong></p>'
          ],
          [
            'cap' => 'Resolver ecuaciones de segundo grado',
            'temas' => ['Ecuaciones completas e incompletas'],
            'teoria' => '<h4>📌 Fórmula general</h4><p>x = [−b ± √(b²−4ac)] / 2a</p><h4>📝 Ejemplo:</h4><p>12x² + 10x − 8 = 0</p><p>Dividiendo entre 2: 6x² + 5x − 4 = 0</p><p>Factorizando: (2x−1)(3x+4) = 0</p><p><strong>x = 1/2 o x = −4/3</strong></p>'
          ],
          [
            'cap' => 'Operar con radicales algebraicos',
            'temas' => ['Radicales con monomios y polinomios'],
            'teoria' => '<h4>📌 Propiedades de radicales</h4><ul><li>√(a·b) = √a · √b</li><li>√(a/b) = √a / √b</li><li>√(a²) = |a|</li></ul><h4>📌 Operaciones</h4><ul><li><strong>Suma/resta:</strong> Solo si tienen mismo índice y radicando.</li><li><strong>Multiplicación:</strong> Se multiplican radicandos.</li><li><strong>División:</strong> Se dividen radicandos.</li></ul>'
          ],
        ]
      ],
      [
        'titulo' => 'Bloque 3 · Geometría y Medidas',
        'capacidades' => [
          [
            'cap' => 'Comprender geometría plana',
            'temas' => ['Ángulos: clasificación (agudo, recto, obtuso, llano, nulo)','Ángulos complementarios y suplementarios','Sistema sexagesimal'],
            'teoria' => '<h4>📌 Clasificación de ángulos</h4><ul><li><strong>Agudo:</strong> 0° < α < 90°</li><li><strong>Recto:</strong> α = 90°</li><li><strong>Obtuso:</strong> 90° < α < 180°</li><li><strong>Llano:</strong> α = 180°</li><li><strong>Complementarios:</strong> α + β = 90°</li><li><strong>Suplementarios:</strong> α + β = 180°</li></ul>'
          ],
          [
            'cap' => 'Comprender geometría del espacio',
            'temas' => ['Triángulos: clasificación por lados y ángulos','Triángulo rectángulo','Teorema de Pitágoras','Cuadriláteros: cuadrado, rectángulo, trapecio, rombo, paralelogramo','Circunferencia: elementos'],
            'teoria' => '<h4>📌 Teorema de Pitágoras</h4><p>a² + b² = h²</p><h4>📝 Ejemplo:</h4><p>Triángulo con lados consecutivos: 3, 4, 5</p><p>3² + 4² = 5² → 9 + 16 = 25 ✓</p><p><strong>Hipotenusa = 5</strong></p><h4>📌 Clasificación de triángulos</h4><ul><li><strong>Según lados:</strong> equilátero, isósceles, escaleno</li><li><strong>Según ángulos:</strong> rectángulo, acutángulo, obtusángulo</li></ul>'
          ],
          [
            'cap' => 'Calcular perímetros y áreas de figuras planas',
            'temas' => ['Polígonos inscriptos en una circunferencia'],
            'teoria' => '<h4>📌 Fórmulas de áreas</h4><ul><li><strong>Rectángulo:</strong> A = base · altura</li><li><strong>Triángulo:</strong> A = (base · altura)/2</li><li><strong>Trapecio:</strong> A = (B + b) · h / 2</li><li><strong>Rombo:</strong> A = (D · d) / 2</li><li><strong>Círculo:</strong> A = πr²</li></ul><h4>📌 Perímetros</h4><ul><li><strong>Rectángulo:</strong> P = 2(base + altura)</li><li><strong>Cuadrado:</strong> P = 4·lado</li><li><strong>Circunferencia:</strong> P = 2πr</li></ul>'
          ],
          [
            'cap' => 'Calcular áreas y volúmenes de cuerpos geométricos',
            'temas' => ['Cubo, prisma, pirámide, cilindro, cono, esfera','Área lateral, área total, volumen y capacidad'],
            'teoria' => '<h4>📌 Volúmenes</h4><ul><li><strong>Cubo:</strong> V = a³</li><li><strong>Cilindro:</strong> V = πr²h</li><li><strong>Cono:</strong> V = (1/3)πr²h</li><li><strong>Pirámide:</strong> V = (1/3)·área base·h</li><li><strong>Esfera:</strong> V = (4/3)πr³</li><li><strong>Prisma:</strong> V = área base · h</li></ul><h4>📌 Áreas totales</h4><ul><li><strong>Cilindro:</strong> A = 2πr(r + h)</li><li><strong>Cono:</strong> A = πr(r + g) (g = generatriz)</li><li><strong>Cubo:</strong> A = 6a²</li></ul><h4>📝 Ejemplo:</h4><p>Cono: r=5cm, g=13cm</p><p>A = π·5(5+13) = 90π ≈ <strong>282,7 cm²</strong></p>'
          ],
        ]
      ],
      [
        'titulo' => 'Bloque 4 · Estadística',
        'capacidades' => [
          [
            'cap' => 'Calcular medidas de tendencia central',
            'temas' => ['Media, mediana y moda (para datos no agrupados)'],
            'teoria' => '<h4>📌 Media aritmética</h4><p>x̄ = (Σ datos) / n</p><h4>📌 Mediana</h4><ul><li>n impar: valor central</li><li>n par: promedio de los dos centrales</li></ul><h4>📌 Moda</h4><p>Valor que más se repite.</p><h4>📝 Ejemplo:</h4><p>Datos: 15,14,14,14,14,13,13,13,12,12,11,11,11</p><p><strong>Media:</strong> 169/13 = <strong>13</strong></p><p><strong>Mediana:</strong> <strong>13</strong></p><p><strong>Moda:</strong> <strong>14</strong> (se repite 4 veces)</p>'
          ],
          [
            'cap' => 'Representar datos gráficamente',
            'temas' => ['Tablas de frecuencia','Polígonos de frecuencia','Gráficos circulares'],
            'teoria' => '<h4>📌 Tablas de frecuencia</h4><p>Organizan datos en intervalos o categorías con sus frecuencias absolutas y relativas.</p><h4>📌 Gráficos estadísticos</h4><ul><li><strong>Polígonos de frecuencia:</strong> Línea que une los puntos medios de cada intervalo.</li><li><strong>Gráficos circulares:</strong> Representan proporciones de un total.</li></ul>'
          ],
        ]
      ],
    ]
  ],
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
            'temas' => ['Tipologías textuales: informativos, expositivos, publicitarios, literarios, argumentativos, jurídico-administrativos','Funciones del lenguaje'],
            'teoria' => '<h4>📌 Tipos de textos</h4><ul><li><strong>Narrativo:</strong> Cuenta hechos (cuentos, noticias).</li><li><strong>Descriptivo:</strong> Describe características.</li><li><strong>Expositivo:</strong> Explica temas (científicos, académicos).</li><li><strong>Argumentativo:</strong> Defiende una postura (ensayos, artículos).</li><li><strong>Informativo:</strong> Informa de actualidad (noticias).</li><li><strong>Publicitario:</strong> Persuade para comprar.</li><li><strong>Literario:</strong> Fines estéticos (poemas, novelas).</li></ul><h4>📌 Funciones del lenguaje</h4><ul><li><strong>Referencial:</strong> Informa sobre la realidad.</li><li><strong>Emotiva:</strong> Expresa emociones.</li><li><strong>Apelativa:</strong> Busca reacción del receptor.</li><li><strong>Poética:</strong> Cuida la forma estética.</li><li><strong>Metalingüística:</strong> Habla sobre el lenguaje.</li><li><strong>Fática:</strong> Verifica el canal.</li></ul>'
          ],
          [
            'cap' => 'Analizar significado de palabras en contexto',
            'temas' => ['Sinónimos, antónimos','Inferencia por contexto','Campo semántico','Hipónimos e hiperónimos'],
            'teoria' => '<h4>📌 Sinónimos y antónimos</h4><ul><li><strong>Sinónimos:</strong> palabras con significado similar (alegre = feliz).</li><li><strong>Antónimos:</strong> palabras con significado opuesto (alto = bajo).</li></ul><h4>📌 Hipónimos e hiperónimos</h4><ul><li><strong>Hiperónimo:</strong> significado amplio (fruta).</li><li><strong>Hipónimos:</strong> significados específicos (manzana, pera).</li></ul>'
          ],
          [
            'cap' => 'Identificar estructura de un texto',
            'temas' => ['Secuencia de ideas','Progresión temática (lineal, constante, derivada, con salto temático)'],
            'teoria' => '<h4>📌 Progresión temática</h4><ul><li><strong>Lineal:</strong> Cada párrafo aporta información nueva.</li><li><strong>Constante:</strong> El mismo tema se repite.</li><li><strong>Derivada:</strong> De una idea principal se derivan subtemas.</li></ul>'
          ],
          [
            'cap' => 'Reconocer ideas principales y secundarias',
            'temas' => ['Tema, ideas principales y secundarias','Trama predominante (narrativa, dialogada, expositiva, argumentativa)'],
            'teoria' => '<h4>📌 Ideas principales y secundarias</h4><ul><li><strong>Idea principal:</strong> Mensaje central del texto.</li><li><strong>Ideas secundarias:</strong> Complementan la principal.</li><li><strong>Tema:</strong> Asunto del que trata el texto.</li></ul>'
          ],
          [
            'cap' => 'Identificar recursos literarios',
            'temas' => ['Personificación, metáfora, sinestesia, repetición, ironía, hipérbole, imágenes sensoriales'],
            'teoria' => '<h4>📌 Recursos literarios</h4><ul><li><strong>Personificación:</strong> Atribuir características humanas a objetos.</li><li><strong>Metáfora:</strong> Identificar un objeto con otro.</li><li><strong>Sinestesia:</strong> Mezclar sensaciones (olor a color).</li><li><strong>Ironía:</strong> Decir lo contrario de lo que se piensa.</li><li><strong>Hipérbole:</strong> Exageración.</li><li><strong>Imágenes sensoriales:</strong> Describen sensaciones (vista, oído, etc.).</li></ul>'
          ],
          [
            'cap' => 'Reconocer conectores textuales',
            'temas' => ['Conectores de adición, orden, causalidad, oposición, enumeración, reformulación, conclusión, restricción, continuación, conexión'],
            'teoria' => '<h4>📌 Conectores textuales</h4><ul><li><strong>Adición:</strong> y, además, también.</li><li><strong>Orden:</strong> primero, después, finalmente.</li><li><strong>Causalidad:</strong> porque, ya que, puesto que.</li><li><strong>Oposición:</strong> pero, sin embargo, sino.</li><li><strong>Enumeración:</strong> en primer lugar, por un lado.</li><li><strong>Reformulación:</strong> es decir, o sea.</li><li><strong>Conclusión:</strong> en conclusión, por lo tanto.</li></ul>'
          ],
        ]
      ],
      [
        'titulo' => 'Bloque 2 · Expresión Escrita',
        'capacidades' => [
          [
            'cap' => 'Aplicar concordancia gramatical',
            'temas' => ['Sustantivos: clases','Núcleo del sujeto y predicado','Sujeto simple y compuesto','Concordancia adjetivo-sustantivo','Oraciones compuestas coordinadas y subordinadas'],
            'teoria' => '<h4>📌 Concordancia</h4><ul><li><strong>Sustantivo-adjetivo:</strong> mismo género y número.</li><li><strong>Sujeto-verbo:</strong> misma persona y número.</li><li><strong>Sujeto simple:</strong> un solo núcleo.</li><li><strong>Sujeto compuesto:</strong> dos o más núcleos.</li></ul>'
          ],
          [
            'cap' => 'Usar tiempos y modos verbales correctamente',
            'temas' => ['Tiempos verbales','Verbos regulares e irregulares','Voz activa y pasiva'],
            'teoria' => '<h4>📌 Tiempos verbales</h4><ul><li><strong>Presente:</strong> hecho actual.</li><li><strong>Pretérito:</strong> hecho pasado.</li><li><strong>Futuro:</strong> hecho futuro.</li></ul><h4>📌 Voz activa y pasiva</h4><ul><li><strong>Activa:</strong> el sujeto realiza la acción.</li><li><strong>Pasiva:</strong> el sujeto recibe la acción.</li></ul>'
          ],
          [
            'cap' => 'Aplicar normas ortográficas',
            'temas' => ['Uso correcto de consonantes con dificultad ortográfica','Acentuación: agudas, llanas, esdrújulas, sobresdrújulas','Acento diacrítico y convencional','Signos de puntuación y auxiliares'],
            'teoria' => '<h4>📌 Acentuación</h4><ul><li><strong>Agudas:</strong> última sílaba tónica (café).</li><li><strong>Llanas/graves:</strong> penúltima sílaba tónica (árbol).</li><li><strong>Esdrújulas:</strong> antepenúltima sílaba tónica (pájaro).</li><li><strong>Sobresdrújulas:</strong> antes de la antepenúltima (dígamelo).</li></ul><h4>📌 Signos de puntuación</h4><ul><li><strong>Coma:</strong> separa elementos de una enumeración.</li><li><strong>Punto:</strong> finaliza una oración.</li><li><strong>Punto y coma:</strong> separa oraciones relacionadas.</li></ul>'
          ],
          [
            'cap' => 'Utilizar recursos de cohesión',
            'temas' => ['Sustituciones léxicas y elipsis','Uso de conectores para relacionar ideas'],
            'teoria' => '<h4>📌 Cohesión textual</h4><ul><li><strong>Sustitución léxica:</strong> usar sinónimos para no repetir.</li><li><strong>Elipsis:</strong> omitir palabras que se sobreentienden.</li><li><strong>Conectores:</strong> relacionan ideas entre sí.</li></ul>'
          ],
        ]
      ],
    ]
  ],
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
            'teoria' => '<h4>📌 Comprensión de textos en guaraní</h4><p>Para comprender un texto en guaraní, es importante:</p><ul><li>Identificar el tema central.</li><li>Reconocer el propósito del autor.</li><li>Prestar atención a palabras clave.</li></ul>'
          ],
          [
            'cap' => 'Comprender textos de actualidad',
            'temas' => ['Lectura de diversos tipos de textos sobre temas contemporáneos'],
            'teoria' => '<h4>📌 Lectura de textos actuales</h4><p>Los textos de actualidad en guaraní pueden ser noticias, artículos, o narraciones sobre hechos recientes.</p>'
          ],
          [
            'cap' => 'Comprender significado de palabras polisémicas',
            'temas' => ['Palabras que tienen varios significados según el contexto'],
            'teoria' => '<h4>📌 Palabras polisémicas</h4><p>Una palabra puede tener varios significados según el contexto.</p><p><strong>Ejemplo:</strong> "tembi\'u" puede significar "comida" o "alimento".</p>'
          ],
          [
            'cap' => 'Identificar estructura y elementos del texto',
            'temas' => ['Estructura del texto','Propósito del autor','Elementos que ayudan a la comprensión lectora'],
            'teoria' => '<h4>📌 Estructura del texto</h4><ul><li><strong>Inicio:</strong> presenta el tema.</li><li><strong>Desarrollo:</strong> explica o narra.</li><li><strong>Cierre:</strong> conclusión o desenlace.</li></ul>'
          ],
        ]
      ],
      [
        'titulo' => "Bloque 2 · Expresión Oral y Escrita",
        'capacidades' => [
          [
            'cap' => 'Expresar ideas con claridad',
            'temas' => ['Demostrar comprensión al hablar sobre textos leídos o escuchados'],
            'teoria' => '<h4>📌 Expresión oral</h4><p>Al hablar sobre un texto, se debe demostrar comprensión del tema y usar vocabulario adecuado.</p>'
          ],
          [
            'cap' => 'Usar correctamente demostrativos',
            'temas' => ['Demostrativos de lugar y tiempo'],
            'teoria' => '<h4>📌 Demostrativos en guaraní</h4><ul><li><strong>ko:</strong> este / esta (cerca).</li><li><strong>pe:</strong> ese / esa (lejos).</li><li><strong>amo:</strong> aquel / aquella (muy lejos).</li></ul>'
          ],
          [
            'cap' => 'Aplicar normas ortográficas del guaraní',
            'temas' => ['Uso correcto de letras','Uso de tildes','Concordancia morfológica'],
            'teoria' => '<h4>📌 Ortografía guaraní</h4><ul><li><strong>Uso de tildes:</strong> palabras esdrújulas y sobresdrújulas llevan tilde.</li><li><strong>Concordancia:</strong> los morfemas deben concordar.</li><li><strong>Letras:</strong> cuidado con la "y" y la "j".</li></ul>'
          ],
          [
            'cap' => 'Usar conectores en la escritura',
            'temas' => ["Conectores lógicos y de secuencia (ej. upéva, jahechápa, ýrõ katu, péicha avei)"],
            'teoria' => '<h4>📌 Conectores en guaraní</h4><ul><li><strong>Upéva:</strong> por eso / entonces.</li><li><strong>Jahechápa:</strong> ¿vemos? / ¿no es cierto?</li><li><strong>Ýrõ katu:</strong> pero / sin embargo.</li><li><strong>Péicha avei:</strong> así también / de igual manera.</li></ul>'
          ],
        ]
      ],
    ]
  ],
];