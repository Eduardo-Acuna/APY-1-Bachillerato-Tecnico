# APY | 1 — Plataforma de preparación para el examen de admisión

Plataforma educativa para prepararte a la Prueba de Admisión de los Bachilleratos
Técnicos del Paraguay. Construida con **HTML + CSS + JavaScript + PHP**.

## Contenido

- **Inicio** (`index.php`) — presentación de la plataforma.
- **Temario** (`temario.php`) — el temario oficial completo (Matemática, Lengua y
  Literatura Castellana, Guaraní Ñe'ẽ), organizado por bloque y capacidad, en
  acordeones desplegables.
- **Exámenes anteriores** (`examenes.php`) — ejercicios reales extraídos de los
  cuadernillos de admisión 2017 y 2020, como ejemplo de estilo y dificultad.
- **Simulacro** (`simulacro.php`) — examen cronometrado, dividido en las tres
  materias, con burbujas de respuesta como en la hoja oficial y corrección
  automática al finalizar.
- **Mis resultados** (`resultados.php`) — historial de simulacros rendidos,
  leído desde `storage/resultados.json` mediante PHP.

## Cómo funciona el PHP

- `partials/nav.php` y `partials/footer.php` se incluyen (`include`) en cada
  página para no repetir el HTML del encabezado y pie.
- `data/*.php` contienen los bancos de datos (temario, exámenes de ejemplo y
  preguntas del simulacro) como arrays de PHP, que las páginas recorren con
  `foreach` para generar el HTML.
- `simulacro.php` convierte el banco de preguntas a JSON con
  `json_encode(...)` y se lo pasa a `js/simulacro.js`, que corre el examen
  enteramente en el navegador (temporizador, navegación entre preguntas,
  corrección).
- Al terminar un simulacro, `js/simulacro.js` hace un `fetch()` POST a
  `api/guardar_resultado.php`, que valida los datos y los agrega a
  `storage/resultados.json` (una mini "base de datos" en archivo plano, sin
  necesidad de configurar MySQL).
- `resultados.php` lee ese mismo archivo con PHP puro y arma la tabla de
  historial.

## Cómo ejecutar el proyecto localmente

Necesitás PHP instalado (viene con **XAMPP**, **MAMP**, **Laragon**, o podés
instalar `php-cli`).

**Opción rápida (servidor embebido de PHP):**

```bash
cd apy1
php -S localhost:8000
```

Luego abrí `http://localhost:8000` en tu navegador.

**Con XAMPP/WAMP:** copiá la carpeta `apy1` dentro de `htdocs/` (XAMPP) o
`www/` (WAMP) y abrí `http://localhost/apy1/`.

> Importante: el sitio usa PHP para el temario, los exámenes de ejemplo, el
> simulacro y el guardado de resultados. Si abrís los archivos `.php`
> directamente con doble clic (`file://...`) el navegador no va a poder
> interpretarlos: necesitás un servidor PHP corriendo (por eso los pasos de
> arriba).

## Estructura de carpetas

```
apy1/
├── index.php
├── temario.php
├── examenes.php
├── simulacro.php
├── resultados.php
├── partials/
│   ├── nav.php
│   └── footer.php
├── data/
│   ├── temario_data.php
│   ├── examenes_data.php
│   └── simulacro_data.php
├── api/
│   └── guardar_resultado.php
├── storage/
│   └── resultados.json
├── css/
│   └── style.css
└── js/
    ├── main.js
    └── simulacro.js
```

## Notas sobre el contenido

- Las preguntas de **Matemática** (28) y de **Lengua y Literatura Castellana**
  (18) del simulacro provienen de cuadernillos reales de la Prueba de
  Admisión (2017 y 2020) y sus respuestas correctas fueron resueltas y
  verificadas paso a paso al armar este banco.
- Las preguntas de **Guaraní Ñe'ẽ** combinan 5 preguntas de comprensión
  lectora del cuadernillo 2017 (moñe'ẽrã "Pastora Concepción Céspedes") con
  6 preguntas de vocabulario básico elaboradas a partir del temario oficial.
- La sección "Exámenes anteriores" muestra más preguntas de ejemplo (sin
  corrección automática) para practicar el estilo general de las cuatro
  fuentes originales.

## Personalización rápida

- Colores, tipografías y el resto del sistema de diseño están centralizados
  como variables CSS al inicio de `css/style.css` (`:root { --paper: ...; }`).
- Para agregar más preguntas al simulacro, sumá elementos al array
  `preguntas` correspondiente en `data/simulacro_data.php` (mismo formato:
  `texto`, `opciones` con 4 elementos, `correcta` con el índice 0-3 de la
  opción correcta).
