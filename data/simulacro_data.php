<?php
/**
 * Banco de preguntas del Simulacro de Examen.
 * Las preguntas de Matemática y Lengua provienen de cuadernillos reales
 * de admisión (2017 / 2020); las respuestas fueron verificadas paso a paso
 * al construir este banco. Las de Guaraní combinan preguntas de comprensión
 * del cuadernillo 2017 con preguntas de vocabulario básico elaboradas
 * a partir del temario oficial.
 */

$lectura_autoestima = "En nuestro país tenemos una percepción del concepto de autoestima exactamente al revés de lo que significa realmente. Todas aquellas personas que aparecen con desplante o 'fuertes de carácter' son, en realidad, todo lo contrario: tienen una autoestima baja.\n\nUna persona con autoestima sana no necesita alterarse ni levantar la voz para decir lo que tiene que decir. Si opinamos distinto no le afecta, no necesita que los demás lo aprueben para mantener su comodidad interior.\n\nLa expresión bien conocida 'Compréndanme, tengo un carácter fuerte' no es más que un recurso lingüístico para tapar nuestro mal genio y está lejos de representar un carácter verdaderamente fuerte, sino más bien un carácter débil.\n\nEs el miedo lo que nos hace buscar protección con estrategias de defensa: gritar, golpear la mesa, ofender a quienes queremos. Elevar realmente nuestra autoestima nos permite disminuir la cantidad de cosas que aparecen amenazantes allá afuera. Esto implica pensar en el fenómeno de la consciencia.\n\nEs útil aclarar que lo contrario de la autoestima no es la heteroestima o estima de los otros, sino la desestima propia. Cada uno de nosotros es valioso por existir. Si llegamos a ser conscientes de esto, nuestra autoestima mejorará y, verdaderamente, tendremos un carácter fuerte.";

$lectura_pastora = "Pastora Concepción Céspedes héra peteĩ kuña Paraguái ohova'ekue ñorairõhápe, pohanoha pytyvõháramo, ñane retã oikérõ guare ñorairõme Bolivia ndive, pe 1932 guive 1935 peve. Oikohágui upéicha, peteĩ pyharevépe, oñuãhẽ chupe marandu, imemby kuimba'e héra Francisco Céspedes, tetã rembiguái upéramo, omano hague Campo Jordán-pe ñorairõ aja. Heta rire, Pastora ojuhu imemby kanguekue Fortín Muñoz-pe, ko'ãga héra Fortín General Díaz.";

$simulacro = [
  'matematica' => [
    'nombre' => 'Matemática',
    'color' => 'mat',
    'descripcion' => 'Números, álgebra, geometría y estadística — extraído y verificado de la Prueba de Admisión 2020.',
    'preguntas' => [
      ['texto'=>"Las puntuaciones de nueve estudiantes en una prueba de habilidades matemáticas fueron: 5, 4, 4, 2, 3, 5, 6, 5, 6. Determina la mediana.",'opciones'=>['5','4','6','3'],'correcta'=>0],
      ['texto'=>"Tenía ₲900.000 en mi caja de ahorros. Hice tres extracciones de ₲150.000 cada una. Luego deposité el doble de lo que extraje y, finalmente, retiré la cuarta parte del dinero que tenía inicialmente. ¿Cuál es mi saldo actual?",'opciones'=>['1.012.500 ₲','1.575.000 ₲','1.125.000 ₲','525.000 ₲'],'correcta'=>2],
      ['texto'=>"Realiza la operación combinada: 1,3̂ · 3/8 + 0,2 ÷ 1/25 − 5,5 =",'opciones'=>['−1/80','0','−5','5'],'correcta'=>1],
      ['texto'=>"Resuelve la siguiente potenciación: [(−11)⁰]¹ =",'opciones'=>['−11','11','1','0'],'correcta'=>2],
      ['texto'=>"Halla la raíz cúbica de: (−0,125) · (1000/27)",'opciones'=>['5/3','−5/3','3/5','−3/5'],'correcta'=>1],
      ['texto'=>"Halla la raíz cuadrada de: √10404 =",'opciones'=>['−102','102','10,2','101'],'correcta'=>1],
      ['texto'=>"Si al triple de un número se le resta 5, se obtiene ese número más 5. ¿Cuál es el número?",'opciones'=>['0','2','3','5'],'correcta'=>3],
      ['texto'=>"Resuelve la ecuación: 4 + 3(2x + 2) = 4(x − 1)",'opciones'=>['7','3','−3','−7'],'correcta'=>3],
      ['texto'=>"Resuelve la expresión racional: 3(x−1)/12 = (x+2)/6 − (x−3)/4",'opciones'=>['−1/2','1/2','4','8'],'correcta'=>2],
      ['texto'=>"Julia compra un cuaderno y un lápiz por un total de ₲6.000. El cuaderno cuesta ₲3.000 más que el lápiz. ¿Cuánto cuesta cada artículo?",'opciones'=>['4500 y 1500','4000 y 2000','3500 y 2500','3750 y 2250'],'correcta'=>0],
      ['texto'=>"Las edades de tres hermanas suman 48 años y son consecutivas. ¿Qué edad tiene la última hermana (la mayor)?",'opciones'=>['16','17','18','15'],'correcta'=>1],
      ['texto'=>"Dos rectas paralelas a // b son cortadas por una secante s. Un ángulo mide 3x − 30° y su co-interior mide x + 20°. Calcula la medida de los cuatro ángulos.",'opciones'=>['112,5 – 67,5 – 112,5 – 67,5','45 – 125 – 45 – 125','115 – 65 – 115 – 65','120 – 60 – 120 – 60'],'correcta'=>0],
      ['texto'=>"¿Cuál de los siguientes grupos de medidas NO representa un triángulo válido?",'opciones'=>['7 cm, 7 cm y 15 cm','7 cm, 7 cm y 10 cm','5 cm, 12 cm y 13 cm','7 cm, 13 cm y 7 cm'],'correcta'=>0],
      ['texto'=>"Realiza la suma de los polinomios: (x² + 2xy + y²) + (x² − 2xy + y²)",'opciones'=>['2x² + 2y²','x² + y²','2xy','−2xy'],'correcta'=>0],
      ['texto'=>"Dados A: x² − 2x − 6, B: 2x + 5, C: 2x² − 1, realiza (A · B) − C.",'opciones'=>['2x³ + x² − 22x − 29','2x³ − x² − 22x − 29','2x³ − x² − 22x − 31','2x³ − x² − 22x + 30'],'correcta'=>1],
      ['texto'=>"Efectúa la división: (3x³ − 10x² + 17x − 12) ÷ (x² − 2x + 3)",'opciones'=>['4x − 3','3x − 4','2x − 4','2x − 3'],'correcta'=>1],
      ['texto'=>"Factoriza: x² + 6x + 9 − y²",'opciones'=>['(x + y − 3)(x + y + 3)','(x − y − 3)(x − y + 3)','(x + y + 3)(x − y + 3)','(x − y − 3)(x + y − 3)'],'correcta'=>2],
      ['texto'=>"Simplifica: [(x² − 3x − 4)/(x² − 2x − 15)] · [(x + 3)/(x + 1)]",'opciones'=>['(x+3)/(x−5)','(x+5)/(x−4)','(x+4)/(x−5)','(x−4)/(x−5)'],'correcta'=>3],
      ['texto'=>"Resuelve el sistema: 8x − 15y = −12 ; 8x − 5y = 0",'opciones'=>['x = 6/5 ; y = 3/4','x = 5/6 ; y = 4/3','x = −3/4 ; y = 6/5','x = 3/4 ; y = 6/5'],'correcta'=>3],
      ['texto'=>"Extrae factores y resuelve: √16xyz − √4xyz − √9xyz + 2√xyz",'opciones'=>['xyz','2√xyz','−√xyz','√xyz'],'correcta'=>3],
      ['texto'=>"Resuelve la ecuación: √(3x + 2) = √(5x − 1)",'opciones'=>['3/8','3/2','−8/3','2/3'],'correcta'=>1],
      ['texto'=>"Un rectángulo mide 7 m de perímetro y 3 m² de superficie. Calcula las medidas de su largo y su ancho.",'opciones'=>['3 y 1,5','2 y 1,5','2 y 2,5','2,5 y 1'],'correcta'=>1],
      ['texto'=>"Si los lados de un triángulo rectángulo son números consecutivos, ¿cuánto mide su hipotenusa?",'opciones'=>['3','4','5','−1'],'correcta'=>2],
      ['texto'=>"Un cilindro tiene por altura la misma longitud que la circunferencia de su base, y la altura mide 125,66 cm. Halla su capacidad (en litros).",'opciones'=>['155','156','159','158'],'correcta'=>3],
      ['texto'=>"Halla el área total de un cono cuya generatriz mide 13 cm y el radio de la base es de 5 cm.",'opciones'=>['280,7 cm²','300,7 cm²','282,7 cm²','285,7 cm²'],'correcta'=>2],
      ['texto'=>"La pirámide de Keops tiene por base un cuadrado de aproximadamente 230,35 m de lado y una altura de 146,61 m. Calcula su volumen.",'opciones'=>['1.650.418,75 m³','2.593.091,06 m³','3.889.645,40 m³','2.475.628,13 m³'],'correcta'=>1],
      ['texto'=>"Se encuestaron 30 niños en edad escolar y se registró su peso en kilogramos. Determina la media aritmética de los pesos.",'opciones'=>['30','33','32','35'],'correcta'=>3],
    ]
  ],

  'lengua' => [
    'nombre' => 'Lengua y Literatura Castellana',
    'color' => 'len',
    'descripcion' => 'Comprensión lectora sobre el texto "Autoestima" y expresión escrita — Prueba de Admisión 2017.',
    'lectura' => $lectura_autoestima,
    'preguntas' => [
      ['texto'=>"La tipología del texto, según su función predominante, es:",'opciones'=>['Periodístico','Argumentativo','Narrativo','Literario'],'correcta'=>1],
      ['texto'=>"La intención comunicativa que persigue el texto es:",'opciones'=>['Que somos seres completos con carácter fuerte','Pensar en el fenómeno de consciencia','Recurrir a la violencia como forma de protegernos','Comprender el significado real de la autoestima'],'correcta'=>3],
      ['texto'=>"En el texto, la palabra \"temple\" significa:",'opciones'=>['Pasividad','Equilibrio','Violencia','Capacidad'],'correcta'=>1],
      ['texto'=>"El texto presenta a la autoestima como:",'opciones'=>['La fortaleza de carácter en el sentido de reaccionar enérgicamente frente a los juicios ajenos','La atención permanente a las opiniones ajenas para modificar una conducta','El sentimiento de comodidad interior frente al entorno y a los demás, basado en la consciencia del real valor de la persona','La reacción violenta, rápida y efectiva contra las críticas'],'correcta'=>2],
      ['texto'=>"Conforme al texto, se infiere que una persona con verdadera autoestima:",'opciones'=>['Siempre creerá que es la única que merece un premio','Se desespera cuando recibe críticas de las demás personas','Se enfrenta con calma a las adversidades del entorno','Trata con desdén a las personas que no conoce bien'],'correcta'=>2],
      ['texto'=>"Según el texto, si una persona sustenta su estima personal en lo que dicen los demás:",'opciones'=>['Confunde autoestima con heteroestima','Aplica un carácter realmente fuerte','Revela un análisis correcto de la autoestima','Demuestra una autoestima suficiente'],'correcta'=>0],
      ['texto'=>"Resulta incompatible con el texto decir que una persona con carácter verdaderamente fuerte se caracteriza por:",'opciones'=>['Una voluntad de querer hacer las cosas bien, aún con dificultades','Expresarse siempre con volumen alto de voz y frases malsonantes','Hablar con cordialidad, incluso, a personas que se muestran descorteses','No intimidarse frente a los problemas del entorno'],'correcta'=>1],
      ['texto'=>"El autor del texto afirma que cada ser humano:",'opciones'=>['Con autoestima no debe alterarse ni levantar la voz','Es la estima de los otros','Busca protección','Es valioso por existir'],'correcta'=>3],
      ['texto'=>"La idea central del texto es:",'opciones'=>['El mal genio del carácter','La baja autoestima del ser humano','El concepto erróneo de la autoestima','La heteroestima del ser humano'],'correcta'=>2],
      ['texto'=>"La expresión del texto que enuncia una relación causa–efecto es:",'opciones'=>['"Es el miedo lo que nos hace buscar protección con estrategias de defensa: gritar, golpear la mesa, ofender"','"Si llegamos a ser conscientes de esto, nuestra autoestima mejorará"','"Es conveniente comprender los hechos tal como se producen sin interpretación"','"Es útil aclarar que lo contrario de la autoestima no es la heteroestima"'],'correcta'=>0],
      ['texto'=>"En \"Si opinamos distinto no le afecta...\", la conjugación del verbo subrayado (\"opinamos\") está en:",'opciones'=>['Tiempo Presente, Modo Indicativo','Pretérito Imperfecto, Modo Indicativo','Tiempo Presente, Modo Subjuntivo','Pretérito Perfecto, Modo Indicativo'],'correcta'=>0],
      ['texto'=>"En \"lejos de representar un carácter verdaderamente fuerte, sino más bien un carácter débil\", el conector \"sino\" indica:",'opciones'=>['Orden de ideas','Oposición de expresión','Adición de expresión','Conclusión de ideas'],'correcta'=>1],
      ['texto'=>"¿Cuál es la única serie compuesta enteramente por palabras llanas o graves?",'opciones'=>['Pensar – estrategias – interpretación – realidad','Ánimo – compréndanme – fenómeno – carácter','Útil – debemos – carácter – miedo','Pesar – implica – carácter – fenómeno'],'correcta'=>2],
      ['texto'=>"Atendiendo a la temática del texto, la opción que presenta el uso de la voz pasiva es:",'opciones'=>['Nosotros tenemos una percepción del concepto de autoestima','Una percepción del concepto de autoestima fue tenida por nosotros','Nuestra autoestima permite disminuir la cantidad de cosas','Compréndanme, tengo un carácter fuerte'],'correcta'=>1],
      ['texto'=>"En \"Ese miedo está relacionado a hechos de nuestro entorno\", la clase de sujeto que presenta es:",'opciones'=>['Sujeto compuesto','Predicado nominal','Sujeto tácito','Sujeto simple'],'correcta'=>3],
      ['texto'=>"En \"...nos permite disminuir la cantidad de cosas que aparecen amenazantes allá afuera. Esto implica pensar...\", la palabra subrayada (\"Esto\") conforme al texto:",'opciones'=>['Remite a una referencia dicha posteriormente','Remite a una referencia ya dicha anteriormente','Remite a una referencia no explícita en el texto','Remite a una referencia que está fuera del texto'],'correcta'=>1],
      ['texto'=>"El único enunciado que posee el uso correcto de la coma es:",'opciones'=>['Mi hermano mayor estudia, electrónica, la menor mecánica automotriz.','El, futbolista exhausto se hizo un tiempo, para hablar con la prensa.','Suspendida la fiesta decidimos ir, a casa y divertirnos igual.','Faltaría que traigan platos, cubiertos, gaseosa y vino.'],'correcta'=>3],
      ['texto'=>"El enunciado que presenta el uso del adverbio de lugar es:",'opciones'=>['Mi amiga vive enfrente de ese edificio.','Él esperará a que tú termines tu tarea.','Viajo con mi hermano.','Carlos y Juan estudian en la biblioteca del colegio.'],'correcta'=>0],
    ]
  ],

  'guarani' => [
    'nombre' => "Guaraní Ñe'ẽ",
    'color' => 'gua',
    'descripcion' => "Comprensión del moñe'ẽrã \"Pastora Concepción Céspedes\" (Prueba 2017) y vocabulario básico del temario.",
    'lectura' => $lectura_pastora,
    'preguntas' => [
      ['texto'=>"Mba'éichapa avei ikatu ambohéra ko moñe'ẽrã?",'opciones'=>['Sy ha aña','Kuña Paraguái','Kuñakaraí reko vai',"Kuimba'e rekovekue"],'correcta'=>1],
      ['texto'=>"Mávapa ha'e haipyvo peteĩha kuaarapo (párrafo)?",'opciones'=>['Ñane retã oikérõ guare ñorairõme.','Oikohágui upéicha, peteĩ pyharevépe, oñuãhẽ chupe marandu.',"Pastora héra peteĩ kuña Paraguái ohova'ekue ñorairõhápe.",'Pe 1932 guive 1935 peve.'],'correcta'=>2],
      ['texto'=>"Ko moñe'ẽrãme oje'ẽvo \"yvypóra\", upéva he'ise:",'opciones'=>['Avakuéra','Kuñanguéra','Tekove añaita','Mitãnguéra'],'correcta'=>2],
      ['texto'=>"Ñe'ẽ \"imemby\" he'isejojáva ko moñe'ẽrãme ha'e:",'opciones'=>['Itajýra','Iñemoñare','Hemiariró','Itaitachu'],'correcta'=>1],
      ['texto'=>"Ñe'ẽjoaju ombohovái porãvéva porandu mba'érehepa Pastora ohova'ekue ñorairõhápe ha'e:",'opciones'=>['Oikuaaségui Chaco rugua',"Oikuaaségui mba'éichapa ñorairõ",'Oipytyvõségui pohanohárape','Oipurukuaaségui mboka'],'correcta'=>2],
      ['texto'=>"¿Qué significa el saludo \"mba'éichapa\"?",'opciones'=>['¿Cómo estás?','Buenos días','Hasta luego','Muchas gracias'],'correcta'=>0],
      ['texto'=>"¿Qué significa la palabra \"aguyje\"?",'opciones'=>['Adiós','Gracias','Por favor','Perdón'],'correcta'=>1],
      ['texto'=>"¿Qué significa el pronombre \"ñande\"?",'opciones'=>['Yo','Tú','Nosotros (incluyente)','Ellos'],'correcta'=>2],
      ['texto'=>"¿Qué significa la palabra \"mitã\"?",'opciones'=>['Niño / niña','Anciano','Maestro','Vecino'],'correcta'=>0],
      ['texto'=>"¿Qué significa la palabra \"yvy\"?",'opciones'=>['Agua','Fuego','Tierra','Aire'],'correcta'=>2],
      ['texto'=>"¿Qué significa la palabra \"ñe'ẽ\"?",'opciones'=>['Casa','Palabra / idioma','Comida','Camino'],'correcta'=>1],
    ]
  ],
];
