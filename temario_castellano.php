<?php $active = 'temario'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Castellano — Temario | APY | 1</title>
<link rel="stylesheet" href="css/style.css">
<style>
  /* Mismos estilos que temario_matematica.php */
  .cap-toggle { display: flex; justify-content: space-between; align-items: center; width: 100%; background: var(--paper-2); border: 1px solid var(--line); border-radius: 8px; padding: 12px 16px; font-size: inherit; font-family: inherit; text-align: left; cursor: pointer; color: var(--ink); transition: background 0.2s, border-color 0.2s; margin-bottom: 0; }
  .cap-toggle:hover { background: var(--paper-3); border-color: var(--muted); }
  .cap-toggle .cap-title { font-weight: 600; font-size: 0.98rem; flex: 1; }
  .cap-toggle .cap-badge { font-size: 0.75rem; background: var(--line); color: var(--ink-2); padding: 2px 10px; border-radius: 20px; margin-right: 12px; }
  .cap-toggle .cap-chev { font-size: 0.8rem; color: var(--muted); transition: transform 0.3s ease; }
  .capacidad.open .cap-toggle { border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-color: #8B5CF6; background: var(--paper-3); }
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
  .ejemplo-item .ej-titulo { font-weight: 600; font-size: 0.88rem; color: #8B5CF6; margin-bottom: 4px; }
  .ejemplo-item .ej-texto { font-size: 0.94rem; margin-bottom: 8px; color: var(--ink); }
  .ejemplo-item .ej-opciones { display: grid; grid-template-columns: 1fr 1fr; gap: 4px 16px; font-size: 0.9rem; color: var(--ink-2); margin-bottom: 8px; }
  .ejemplo-item .ej-opciones .correcta { color: #8B5CF6; font-weight: 600; }
  .ejemplo-item .ej-explicacion { font-size: 0.88rem; background: var(--paper-2); padding: 8px 12px; border-radius: 6px; border-left: 3px solid #8B5CF6; margin-top: 4px; color: var(--ink-2); }
  .ejemplo-item .ej-explicacion strong { color: var(--ink); }
  .area-block .capacidad { margin-bottom: 8px; }
  .area-len .area-toggle .idx { background: #8B5CF6; }
  .back-link { display: inline-flex; align-items: center; gap: 6px; color: var(--ink-2); text-decoration: none; font-size: 0.9rem; margin-bottom: 16px; padding: 6px 12px; border-radius: 6px; background: var(--paper-2); transition: background 0.2s; }
  .back-link:hover { background: var(--paper-3); color: var(--ink); }
  .area-header { display: flex; align-items: center; gap: 14px; margin-bottom: 20px; }
  .area-header .icon { font-size: 2.4rem; }
  .area-header h1 { margin: 0; font-size: clamp(1.8rem, 3vw, 2.4rem); }
  .area-header .badge { font-size: 0.8rem; background: #8B5CF6; color: white; padding: 2px 14px; border-radius: 20px; font-weight: 500; }
  .cap-badge-ej { font-size: 0.7rem; background: #ede9fe; color: #8B5CF6; padding: 1px 10px; border-radius: 20px; margin-right: 10px; font-weight: 500; }
</style>
</head>
<body>
<?php include 'partials/nav.php'; ?>

<main>
  <section style="padding-bottom:20px;">
    <div class="wrap">
      <a href="temario.php" class="back-link">← Volver al temario</a>
      <div class="area-header">
        <span class="icon">📖</span>
        <h1>Lengua y Literatura Castellana</h1>
        <span class="badge">8 temas</span>
      </div>
      <p class="lede" style="max-width:60ch;">Comprensión lectora, gramática, ortografía y redacción — hacé clic en cada capacidad para ver la teoría y ejercicios de ejemplo.</p>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
      <!-- Bloque 1: Comprensión de Textos -->
      <div class="area-block area-len" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 1</span>Comprensión de Textos</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Analizar tipos de textos y funciones del lenguaje</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Tipologías textuales: informativos, expositivos, publicitarios, literarios, argumentativos, jurídico-administrativos</li>
                  <li>Funciones del lenguaje</li>
                </ul>
                <div class="cap-teoria">
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
                    <li><strong>Metalingüística:</strong> Habla sobre el lenguaje.</li>
                    <li><strong>Fática:</strong> Verifica el canal.</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 1 - Examen 2017</div>
                    <div class="ej-texto">La tipología del texto "Autoestima", según su función predominante, es:</div>
                    <div class="ej-opciones">
                      <span>a. Periodístico</span>
                      <span class="correcta">b. Argumentativo ✓</span>
                      <span>c. Narrativo</span>
                      <span>d. Literario</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> El texto "Autoestima" defiende una postura sobre el concepto de autoestima, por lo que es argumentativo.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Reconocer conectores textuales</span>
                <span class="cap-badge">1 tema</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Conectores de adición, orden, causalidad, oposición, enumeración, reformulación, conclusión, restricción, continuación, conexión</li>
                </ul>
                <div class="cap-teoria">
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
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 12 - Examen 2017</div>
                    <div class="ej-texto">En la expresión "...sino más bien un carácter débil", el conector "sino" indica:</div>
                    <div class="ej-opciones">
                      <span>a. Orden de ideas</span>
                      <span class="correcta">b. Oposición de expresión ✓</span>
                      <span>c. Adición de expresión</span>
                      <span>d. Conclusión de ideas</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> "Sino" se usa para contraponer una idea a otra, indicando oposición.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Reconocer ideas principales y secundarias</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Tema, ideas principales y secundarias</li>
                  <li>Trama predominante (narrativa, dialogada, expositiva, argumentativa)</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Ideas principales y secundarias</h4>
                  <ul>
                    <li><strong>Idea principal:</strong> Mensaje central del texto.</li>
                    <li><strong>Ideas secundarias:</strong> Complementan la principal.</li>
                    <li><strong>Tema:</strong> Asunto del que trata el texto.</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 9 - Examen 2017</div>
                    <div class="ej-texto">La idea central del texto "Autoestima" es:</div>
                    <div class="ej-opciones">
                      <span>a. El mal genio del carácter</span>
                      <span>b. La baja autoestima del ser humano</span>
                      <span class="correcta">c. El concepto erróneo de la autoestima ✓</span>
                      <span>d. La heteroestima del ser humano</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> El texto explica que tenemos una percepción equivocada de lo que es la autoestima.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bloque 2: Expresión Escrita -->
      <div class="area-block area-len" data-area>
        <button class="area-toggle" type="button">
          <span><span class="idx">Bloque 2</span>Expresión Escrita</span>
          <span class="chev">+</span>
        </button>
        <div class="area-body">
          <div class="area-inner">
            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Aplicar normas ortográficas (acentuación)</span>
                <span class="cap-badge">2 temas</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Acentuación: agudas, llanas, esdrújulas, sobresdrújulas</li>
                  <li>Acento diacrítico y convencional</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Acentuación</h4>
                  <ul>
                    <li><strong>Agudas:</strong> última sílaba tónica (café, cantó). Llevan tilde cuando terminan en n, s o vocal.</li>
                    <li><strong>Llanas/graves:</strong> penúltima sílaba tónica (árbol, fácil). Llevan tilde cuando NO terminan en n, s o vocal.</li>
                    <li><strong>Esdrújulas:</strong> antepenúltima sílaba tónica (pájaro, rápido). Siempre llevan tilde.</li>
                    <li><strong>Sobresdrújulas:</strong> antes de la antepenúltima (dígamelo). Siempre llevan tilde.</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 13 - Examen 2017</div>
                    <div class="ej-texto">La única serie de palabras que son todas llanas o graves es:</div>
                    <div class="ej-opciones">
                      <span>a. Pensar – estrategias – interpretación – realidad</span>
                      <span>b. Ánimo – compréndanme – fenómeno – carácter</span>
                      <span class="correcta">c. Útil – debemos – carácter – miedo ✓</span>
                      <span>d. Pesar – implica – carácter – fenómeno</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> Útil (llana), debemos (llana), carácter (llana), miedo (llana). Las otras series tienen agudas o esdrújulas.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Reconocer voz activa y pasiva</span>
                <span class="cap-badge">1 tema</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Voz activa y pasiva</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Voz activa y pasiva</h4>
                  <ul>
                    <li><strong>Activa:</strong> el sujeto realiza la acción.</li>
                    <li><strong>Pasiva:</strong> el sujeto recibe la acción.</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 14 - Examen 2017</div>
                    <div class="ej-texto">La opción que presenta el uso de la voz pasiva es:</div>
                    <div class="ej-opciones">
                      <span>a. Nosotros tenemos una percepción...</span>
                      <span class="correcta">b. Una percepción... fue tenida por nosotros ✓</span>
                      <span>c. Nuestra autoestima permite...</span>
                      <span>d. Compréndanme, tengo...</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> "Fue tenida por nosotros" es voz pasiva (sujeto recibe la acción).</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="capacidad">
              <button class="cap-toggle" type="button">
                <span class="cap-title">Usar signos de puntuación correctamente</span>
                <span class="cap-badge">1 tema</span>
                <span class="cap-badge-ej">1 ejemplo</span>
                <span class="cap-chev">▾</span>
              </button>
              <div class="cap-body">
                <ul class="cap-temas">
                  <li>Signos de puntuación y auxiliares</li>
                </ul>
                <div class="cap-teoria">
                  <h4>📌 Signos de puntuación</h4>
                  <ul>
                    <li><strong>Coma:</strong> separa elementos de una enumeración o aclara información.</li>
                    <li><strong>Punto:</strong> finaliza una oración.</li>
                    <li><strong>Punto y coma:</strong> separa oraciones relacionadas.</li>
                    <li><strong>Dos puntos:</strong> introduce una enumeración o cita.</li>
                  </ul>
                </div>
                <div class="ejemplos-list">
                  <h5 style="margin:14px 0 10px 0;font-size:0.95rem;color:var(--ink);">📝 Ejercicios de ejemplo</h5>
                  <div class="ejemplo-item">
                    <div class="ej-titulo">Ejercicio 17 - Examen 2017</div>
                    <div class="ej-texto">El único enunciado que posee el uso correcto de la coma es:</div>
                    <div class="ej-opciones">
                      <span>a. Mi hermano mayor estudia, electrónica, la menor...</span>
                      <span>b. El, futbolista exhausto se hizo un tiempo...</span>
                      <span>c. Suspendida la fiesta decidimos ir, a casa...</span>
                      <span class="correcta">d. Faltaría que traigan platos, cubiertos, gaseosa y vino. ✓</span>
                    </div>
                    <div class="ej-explicacion"><strong>💡 Explicación:</strong> La coma separa correctamente elementos de una enumeración.</div>
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