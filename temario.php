<?php $active = 'temario'; include 'data/temario_data.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>APY1 | temario</title>
<link rel="icon" type="image/png" href="img/logo2.png">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:20px;">
    <div class="wrap">
      <h1 style="font-size:clamp(2rem,4vw,2.8rem);">Elegí un materia para empezar a repasar</h1>
      <p class="lede" style="max-width:60ch;">Cada materia tiene su propio temario con teoría, demostraciones paso a paso, y ejercicios reales resueltos de exámenes anteriores.</p>
    </div>
  </section>

<section style="padding-top:0;">
    <div class="wrap">
      <div class="grid-3">
        
        <!-- Tarjeta 1: Matemática -->
        <a href="temario_matematica.php" class="card subject-green" style="text-decoration:none; display:flex; flex-direction:column; height:100%;">
          <h3>Matemática</h3>
          <p style="margin-bottom: 20px;">14 capacidades con teoría, demostración y ejercicios.</p>
          <ol style="padding-left: 20px; margin-bottom: 30px;">
            <li style="margin-bottom: 8px; color: #4A5568;">Números y Operaciones Básicas</li>
            <li style="margin-bottom: 8px; color: #4A5568;">Álgebra (Expresiones y Ecuaciones)</li>
            <li style="margin-bottom: 8px; color: #4A5568;">Geometría y Medidas</li>
            <li style="margin-bottom: 8px; color: #4A5568;">Estadística</li>
          </ol>
          <div class="btn ghost mt" style="margin-top:auto; display:inline-flex; align-self:flex-start;">Ver temario →</div>
        </a>

        <!-- Tarjeta 2: Castellano -->
        <a href="temario_castellano.php" class="card subject-red" style="text-decoration:none; display:flex; flex-direction:column; height:100%;">
          <h3>Lengua y Literatura Castellana</h3>
          <p style="margin-bottom: 20px;">10 capacidades con teoría, demostración y ejercicios.</p>
          <ol style="padding-left: 20px; margin-bottom: 30px;">
            <li style="margin-bottom: 8px; color: #4A5568;">Comprensión de Textos</li>
            <li style="margin-bottom: 8px; color: #4A5568;">Expresión Escrita</li>
          </ol>
          <div class="btn ghost mt" style="margin-top:auto; display:inline-flex; align-self:flex-start;">Ver temario →</div>
        </a>

        <!-- Tarjeta 3: Guaraní -->
        <a href="temario_guarani.php" class="card subject-yellow" style="text-decoration:none; display:flex; flex-direction:column; height:100%;">
          <h3>Lengua y Literatura Guaraní Ñe'ẽ</h3>
          <p style="margin-bottom: 20px;">8 capacidades con teoría, demostración y ejercicios.</p>
          <ol style="padding-left: 20px; margin-bottom: 30px;">
            <li style="margin-bottom: 8px; color: #4A5568;">Comprensión Oral y Lectura</li>
            <li style="margin-bottom: 8px; color: #4A5568;">Expresión Oral y Escrita</li>
          </ol>
          <div class="btn ghost mt" style="margin-top:auto; display:inline-flex; align-self:flex-start;">Ver temario →</div>
        </a>

      </div>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <div class="callout center" style="max-width:640px;margin:0 auto;">
        <h4>¿Ya repasaste todos los temas?</h4>
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
</body>
</html>
