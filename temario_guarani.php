<?php $active = 'temario'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guaraní — Temario | APY | 1</title>
<link rel="stylesheet" href="css/style.css">
<style>
  /* Mismos estilos con color verde para Guaraní */
  .cap-toggle { display: flex; justify-content: space-between; align-items: center; width: 100%; background: var(--paper-2); border: 1px solid var(--line); border-radius: 8px; padding: 12px 16px; font-size: inherit; font-family: inherit; text-align: left; cursor: pointer; color: var(--ink); transition: background 0.2s, border-color 0.2s; margin-bottom: 0; }
  .cap-toggle:hover { background: var(--paper-3); border-color: var(--muted); }
  .cap-toggle .cap-title { font-weight: 600; font-size: 0.98rem; flex: 1; }
  .cap-toggle .cap-badge { font-size: 0.75rem; background: var(--line); color: var(--ink-2); padding: 2px 10px; border-radius: 20px; margin-right: 12px; }
  .cap-toggle .cap-chev { font-size: 0.8rem; color: var(--muted); transition: transform 0.3s ease; }
  .capacidad.open .cap-toggle { border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-color: #059669; background: var(--paper-3); }
  .capacidad.open .cap-toggle .cap-chev { transform: rotate(180deg); }
  .cap-body { display: none; padding: 16px 18px 20px 18px; border: 1px solid var(--line); border-top: none; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; background: var(--paper); margin-bottom: 6px; }
  .capacidad.open .cap-body { display: block; }
  .cap-temas { margin: 0 0 12px 0; padding-left: 20px; font-size: 0.92rem; color: var(--ink-2); }
  .cap-temas li { margin-bottom: 3px; }
  .cap-teoria { background: var(--paper-2); border-radius: 8px; padding: 14px 18px; margin-top: 8px; font-size: 0.94rem; line-height: 1.65; border: 1px solid var(--line-soft); }
  .cap-teoria h4 { margin: 12px 0 6px 0; font-size: 1rem; color: var(--ink); }
  .cap-teoria h4:first-child { margin-top: 0; }
  .cap-teoria ul, .cap-teoria ol { padding-left: 22px; margin: 6px 0 10px 0; }
  .cap-teoria li { margin-bottom: 4px; }
  .cap-teoria p { margin: 6px 0; }
  .cap-teoria strong { color: var(--ink); }
  .ejemplos-list { margin-top: 14px; }
  .ejemplo-item { background: var(--paper); border: 1px solid var(--line-soft); border-radius: 8px; padding: 14px 16px; margin-bottom: 10px; transition: border-color 0.2s; }
  .ejemplo-item:hover { border-color: var(--muted); }
  .ejemplo-item .ej-titulo { font-weight: 600; font-size: 0.88rem; color: #059669; margin-bottom: 4px; }
  .ejemplo-item .ej-texto { font-size: 0.94rem; margin-bottom: 8px; color: var(--ink); }
  .ejemplo-item .ej-opciones { display: grid; grid-template-columns: 1fr 1fr; gap: 4px 16px; font-size: 0.9rem; color: var(--ink-2); margin-bottom: 8px; }
  .ejemplo-item .ej-opciones .correcta { color: #059669; font-weight: 600; }
  .ejemplo-item .ej-explicacion { font-size: 0.88rem; background: var(--paper-2); padding: 8px 12px; border-radius: 6px; border-left: 3px solid #059669; margin-top: 4px; color: var(--ink-2); }
  .ejemplo-item .ej-explicacion strong { color: var(--ink); }
  .area-block .capacidad { margin-bottom: 8px; }
  .area-gua .area-toggle .idx { background: #059669; }
  .back-link { display: inline-flex; align-items: center; gap: 6px; color: var(--ink-2); text-decoration: none; font-size: 0.9rem; margin-bottom: 16px; padding: 6px 12px; border-radius: 6px; background: var(--paper-2); transition: background 0.2s; }
  .back-link:hover { background: var(--paper-3); color: var(--ink); }
  .area-header { display: flex; align-items: center; gap: 14px; margin-bottom: 20px; }
  .area-header .icon { font-size: 2.4rem; }
  .area-header h1 { margin: 0; font-size: clamp(1.8rem, 3vw, 2.4rem); }
  .area-header .badge { font-size: 0.8rem; background: #059669; color: white; padding: 2px 14px; border-radius: 20px; font-weight: 500; }
  .cap-badge-ej { font-size: 0.7rem; background: #d1fae5; color: #059669; padding: 1px 10px; border-radius: 20px; margin-right: 10px; font-weight: 500; }
</style>
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:20px;">
    <div class="wrap">
      <a href="temario.php" class="back-link">← Volver al temario</a>
      <div class="area-header">
        <span class="icon">🗣️</span>
        <h1>Guaraní Ñe'ẽ</h1>
        <span class="badge">5 temas</span>
      </div>
      <p class="lede" style="max-width:60ch;">Comprensión de textos, vocabulario y ortografía — hacé clic en cada capacidad para ver la teoría y ejercicios de ejemplo.</p>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <!-- Bloque 1: Comprensión Oral y Lectura -->
      <div class="area-block area-gua" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 1</span>Comprensión Oral y Lectura</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Comprender textos orales y escritos en guaraní</span>
                <span class="cap-badge">4 temas</span>
                <span class="cap-badge-ej">2 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Identificar el tema y el propósito comunicativo</li>
                  <li>Lectura de diversos tipos de textos sobre temas contemporáneos</li>
                  <li>Palabras polisémicas (varios significados según contexto)</li>
                  <li>Estructura del texto y propósito del autor</li>
                </ul>
                <div class="cap-teoria">
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
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 19 - Examen 2017</div>
                    <div class="ej-texto">Mba'éichapa avei ikatu ambohéra ko moñe'ẽrã?</div>
                    <div class="ej-opciones">
                      <span>a. Sy ha aña</span>
                      <span class="correcta">b. Kuña Paraguái ✓</span>
                      <span>c. Kuñakaraí reko vai</span>
                      <span>d. Kuimba'e rekovekue</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> El texto trata sobre Pastora Concepción Céspedes, una mujer paraguaya. "Kuña Paraguái" significa "mujer paraguaya".</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 23 - Examen 2017</div>
                    <div class="ej-texto">Ñe'ẽ "imemby" he'isejojáva ko moñe'ẽrãme ha'e:</div>
                    <div class="ej-opciones">
                      <span>a. Itajýra</span>
                      <span class="correcta">b. Iñemoñare ✓</span>
                      <span>c. Hemiariró</span>
                      <span>d. Itaitachu</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> "Imemby" significa "su hijo". "Iñemoñare" también significa "su hijo" en el contexto de descendencia.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bloque 2: Expresión Oral y Escrita -->
      <div class="area-block area-gua" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 2</span>Expresión Oral y Escrita</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Vocabulario básico en guaraní</span>
                <span class="cap-badge">1 tema</span>
                <span class="cap-badge-ej">2 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Saludos, pronombres, palabras cotidianas</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Vocabulario básico</h4>
                  <ul>
                    <li><strong>Mba'éichapa:</strong> ¿Cómo estás?</li>
                    <li><strong>Aguyje:</strong> Gracias</li>
                    <li><strong>Ñande:</strong> Nosotros (incluyente)</li>
                    <li><strong>Mitã:</strong> Niño / niña</li>
                    <li><strong>Yvy:</strong> Tierra</li>
                    <li><strong>Ñe'ẽ:</strong> Palabra / idioma</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Pregunta de vocabulario</div>
                    <div class="ej-texto">¿Qué significa la palabra "aguyje"?</div>
                    <div class="ej-opciones">
                      <span>a. Adiós</span>
                      <span class="correcta">b. Gracias ✓</span>
                      <span>c. Por favor</span>
                      <span>d. Perdón</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> "Aguyje" es la forma de decir "gracias" en guaraní.</div>
                  </div>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Pregunta de vocabulario</div>
                    <div class="ej-texto">¿Qué significa el pronombre "ñande"?</div>
                    <div class="ej-opciones">
                      <span>a. Yo</span>
                      <span>b. Tú</span>
                      <span class="correcta">c. Nosotros (incluyente) ✓</span>
                      <span>d. Ellos</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> "Ñande" es el pronombre que incluye a la persona que habla y a la que escucha.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Usar correctamente demostrativos y conectores</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">0 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Demostrativos de lugar y tiempo (ko, pe, amo)</li>
                  <li>Conectores lógicos y de secuencia (upéva, jahechápa, ýrõ katu, péicha avei)</li>
                </ul>
                <div class="cap-teoria">
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
                </div>
              </div>
            </div>

            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Aplicar normas ortográficas del guaraní</span>
                <span class="cap-badge">1 tema</span>
                <span class="cap-badge-ej">0 ejemplos</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Uso correcto de letras, uso de tildes, concordancia morfológica</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Ortografía guaraní</h4>
                  <ul>
                    <li><strong>Uso de tildes:</strong> palabras esdrújulas y sobresdrújulas llevan tilde.</li>
                    <li><strong>Concordancia:</strong> los morfemas deben concordar.</li>
                    <li><strong>Letras:</strong> cuidado con la "y" y la "j".</li>
                  </ul>
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