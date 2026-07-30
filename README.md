# APY | 1 - Bachillerato Técnico

Plataforma web diseñada para la preparación académica de estudiantes, orientada a los exámenes de admisión para Bachilleratos Técnicos en Paraguay. El sistema replica el entorno de evaluación oficial, utilizando lineamientos y cuadernillos de la Prueba de Admisión del Ministerio de Educación y Ciencias (MEC).

---

## Arquitectura y Tecnologías

El proyecto está desarrollado con un enfoque modular para facilitar la escalabilidad y el mantenimiento del código base.

*   **Frontend:** HTML5 semántico y CSS3 puro.
*   **Sistema de Diseño:** Implementación de CSS Grid y Flexbox para layouts responsivos. Uso extensivo de variables CSS para mantener la consistencia corporativa del esquema de colores.
*   **Estructura Base:** PHP. La arquitectura visual utiliza un sistema de directorios parciales (`partials/`) para la inyección y reutilización de componentes de interfaz (cabeceras, pies de página, y módulos de temarios).

## Módulos Principales

*   **Motor de Simulacros:** Interfaz interactiva que emula las hojas de respuestas oficiales, optimizada para la práctica bajo presión de tiempo.
*   **Estructuración de Temario:** Organización de contenidos requeridos divididos en tres áreas core: Matemática, Lengua y Literatura Castellana, y Guaraní Ñe'ẽ.
*   **Repositorio Histórico:** Acceso estructurado a evaluaciones de años anteriores para análisis de patrones de examen.

## Registro de Cambios Recientes (Refactorización UI)

*   **Hero Section:** Transición de un layout dividido a un componente full-width (`.hero-full-bg`). Implementación de propiedades `linear-gradient` sobre fondos fotográficos para asegurar índices correctos de contraste y legibilidad tipográfica.
*   **Footer Layout:** Reestructuración de la jerarquía visual mediante CSS Grid (`grid-template-columns: 2fr 1fr 1fr`). Aplicación de Flexbox en columna para el control estricto de la alineación entre la marca gráfica y la descripción institucional.

---

## Despliegue en Entorno Local

Para ejecutar el proyecto en un entorno de desarrollo, es necesario disponer de un servidor local con soporte para PHP (ej. Apache vía XAMPP, MAMP o Laragon).

1. Clonar el repositorio dentro del directorio raíz público del servidor web (`htdocs`, `www` o equivalente):
   ```bash
   git clone [https://github.com/Eduardo-Acuna/APY-1-Bachillerato-Tecnico.git](https://github.com/Eduardo-Acuna/APY-1-Bachillerato-Tecnico.git)


Aviso Legal
Material de software desarrollado con fines estrictamente educativos. Este código y su contenido no representan un producto oficial de carácter gubernamental, ni están vinculados institucionalmente al Ministerio de Educación y Ciencias (MEC) de Paraguay.