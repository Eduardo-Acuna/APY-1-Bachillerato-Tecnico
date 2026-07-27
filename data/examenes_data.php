<?php
/**
 * Preguntas de ejemplo extraídas de cuadernillos reales de admisión,
 * para usar como material de referencia y práctica.
 * Fuente: "Prueba de Admisión de Matemáticas 2020 – Nivel Nacional 1" y
 *         "Prueba de Admisión – Bachilleratos Técnicos, Capital y Central – 2017".
 */
$examenes = [
  [
    'id' => 'mat-2020',
    'materia' => 'Matemática',
    'color' => 'mat',
    'anio' => '2020',
    'fuente' => 'Nivel Nacional 1',
    'preguntas' => [
      ['num'=>1,'texto'=>'Las puntuaciones de nueve estudiantes en una prueba de habilidades matemáticas fueron: 5, 4, 4, 2, 3, 5, 6, 5, 6. Determina la mediana.','opciones'=>['5','4','6','3']],
      ['num'=>2,'texto'=>'Tenía ₲900.000 en mi caja de ahorros. Hice tres extracciones de ₲150.000 cada una. Luego deposité el doble de lo que extraje, y finalmente retiré la cuarta parte del dinero que tenía inicialmente. ¿Cuál es mi saldo actual?','opciones'=>['1.012.500 ₲','1.575.000 ₲','1.125.000 ₲','525.000 ₲']],
      ['num'=>8,'texto'=>'Si al triple de un número se le resta 5, se obtiene ese número más 5. ¿Cuál es el número?','opciones'=>['0','2','3','5']],
      ['num'=>13,'texto'=>'Calcula la medida de todos los ángulos formados por dos rectas paralelas a // b cortadas por una secante s, donde un ángulo mide 3x − 30° y el otro x + 20°.','opciones'=>['112,5 – 67,5 – 112,5 – 67,5','45 – 125 – 45 – 125','115 – 65 – 115 – 65','120 – 60 – 120 – 60']],
      ['num'=>16,'texto'=>'Dados los polinomios A: x² − 2x − 6, B: 2x + 5, C: 2x² − 1. Realiza (A · B) − C.','opciones'=>['2x³ + x² − 22x − 29','2x³ − x² − 22x − 29','2x³ − x² − 22x − 31','2x³ − x² − 22x + 30']],
      ['num'=>18,'texto'=>'Factoriza según corresponda: x² + 6x + 9 − y²','opciones'=>['(x + y − 3)(x + y + 3)','(x − y − 3)(x − y + 3)','(x + y + 3)(x − y + 3)','(x − y − 3)(x + y − 3)']],
      ['num'=>27,'texto'=>'Un cilindro tiene por altura la misma longitud que la circunferencia de la base, y la altura mide 125,66 cm. Halle su capacidad.','opciones'=>['155','156','159','158']],
      ['num'=>29,'texto'=>'La pirámide de Keops tiene por base un cuadrado de aproximadamente 230,35 m de lado y una altura de aproximadamente 146,61 m. Calcule el volumen que ocupa.','opciones'=>['1.650.418,75 m³','2.593.091,06 m³','3.889.645,40 m³','2.475.628,13 m³']],
      ['num'=>30,'texto'=>'Se encuestó a 30 niños en edad escolar y se registró su peso en kilogramos. Determina la media aritmética de los pesos registrados.','opciones'=>['30','33','32','35']],
    ]
  ],
  [
    'id' => 'mat-2017',
    'materia' => 'Matemática',
    'color' => 'mat',
    'anio' => '2017',
    'fuente' => 'Capital y Central · Fila 2',
    'preguntas' => [
      ['num'=>2,'texto'=>'Dada la siguiente división: (6x³ + 19x² − 17x − 18) : (5x + 2x² − 9), el cociente es:','opciones'=>['3x − 2','3x + 2','3x − 3','6x + 1']],
      ['num'=>5,'texto'=>'La expresión 24 − {14 + 8 · 6 − [(−4)² · 2 − 12]} tiene como resultado:','opciones'=>['18','−18','−15','15']],
      ['num'=>12,'texto'=>'Una granja tiene gallinas y vacas: en total hay 26 cabezas y 84 patas. ¿Cuántas gallinas y vacas hay?','opciones'=>['10 y 16','14 y 12','12 y 18','20 y 18']],
      ['num'=>16,'texto'=>'El perímetro de un rectángulo es 70 metros. Si al doble del largo se le suma el triple del ancho se obtiene 80 metros. ¿Cuánto miden el largo y el ancho?','opciones'=>['25 y 10','20 y 25','12 y 10','25 y 12']],
      ['num'=>28,'texto'=>'Una escalera de 16 metros se apoya en una muralla vertical; el pie de la escalera está a 4 metros de la muralla. Calcula la altura que alcanza la escalera.','opciones'=>['3√15 m','4√5 m','8√15 m','4√15 m']],
    ]
  ],
  [
    'id' => 'len-2017',
    'materia' => 'Lengua y Literatura Castellana',
    'color' => 'len',
    'anio' => '2017',
    'fuente' => 'Capital y Central · Fila 1 — texto "Autoestima"',
    'preguntas' => [
      ['num'=>1,'texto'=>'La tipología del texto "Autoestima", según su función predominante, es:','opciones'=>['Periodístico','Argumentativo','Narrativo','Literario']],
      ['num'=>3,'texto'=>'En el texto, la palabra "temple" significa:','opciones'=>['Pasividad','Equilibrio','Violencia','Capacidad']],
      ['num'=>9,'texto'=>'La idea central del texto es:','opciones'=>['El mal genio del carácter','La baja autoestima del ser humano','El concepto erróneo de la autoestima','La heteroestima del ser humano']],
      ['num'=>12,'texto'=>'En la expresión "lejos de representar un carácter verdaderamente fuerte, sino más bien un carácter débil", el conector subrayado ("sino") indica:','opciones'=>['Orden de ideas','Oposición de expresión','Adición de expresión','Conclusión de ideas']],
      ['num'=>17,'texto'=>'El único enunciado que posee el uso correcto de la coma es:','opciones'=>['Mi hermano mayor estudia, electrónica, la menor mecánica automotriz.','El, futbolista exhausto se hizo un tiempo, para hablar con la prensa.','Suspendida la fiesta decidimos ir, a casa y divertirnos igual.','Faltaría que traigan platos, cubiertos, gaseosa y vino.']],
    ]
  ],
  [
    'id' => 'gua-2017',
    'materia' => "Guaraní Ñe'ẽ",
    'color' => 'gua',
    'anio' => '2017',
    'fuente' => "Capital y Central · Fila 1 — moñe'ẽrã \"Pastora Concepción Céspedes\"",
    'preguntas' => [
      ['num'=>19,'texto'=>"Mba'éichapa avei ikatu ambohéra ko moñe'ẽrã?",'opciones'=>['Sy ha aña','Kuña Paraguái','Kuñakaraí reko vai','Kuimba\'e rekovekue']],
      ['num'=>22,'texto'=>'Ko moñe\'ẽrãme oje\'ẽvo "yvypóra" upéva he\'ise:','opciones'=>['Avakuéra','Kuñanguéra',"Tekove añaita",'Mitãnguéra']],
      ['num'=>23,'texto'=>'Ñe\'ẽ "imemby" he\'isejojáva ko moñe\'ẽrãme ha\'e:','opciones'=>['Itajýra','Iñemoñare','Hemiariró','Itaitachu']],
      ['num'=>28,'texto'=>"Ñe'ẽjoaju ombohovái porãvéva porandu mba'érehepa Pastora Concepción Céspedes ohova'ekue ñorairõhápe ha'e:",'opciones'=>['Oikuaaségui Chaco rugua','Oikuaaségui mba\'éichapa ñorairõ','Oipytyvõségui pohanohárape','Oipurukuaaségui mboka']],
    ]
  ],
];
