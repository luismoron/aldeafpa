# Documentación del Tema Aldeafpa

## Introducción

El tema **Aldeafpa** es un tema personalizado de WordPress diseñado para la institución educativa "Aldea Universitaria Fray Pedro de Agreda". Incluye una página principal estática con secciones dinámicas para mostrar programas (PNF), noticias, información institucional y contacto. El tema utiliza Tailwind CSS para estilos modernos y responsivos.

### Características Principales
- **Página principal personalizada**: Muestra secciones como PNF Disponibles, Últimas Noticias, Nosotros y Contacto.
- **Menú de navegación**: Enlaces de ancla para navegación suave entre secciones.
- **Responsive**: Optimizado para móviles, tablets y desktop.
- **Integración con WordPress**: Usa páginas, posts y menús nativos.
- **Estilos modernos**: Sombras, transiciones y layout tipo Pinterest para noticias.

## Instalación

1. **Descarga el tema**: Copia la carpeta del tema (`aldeafpa`) a `wp-content/themes/` en tu instalación de WordPress.
2. **Activa el tema**: Ve a **Apariencia > Temas** en el panel de WordPress y activa "Aldeafpa".
3. **Instala dependencias**: Ejecuta `pnpm install` y `pnpm run build:css` en la carpeta del tema para compilar Tailwind CSS.
4. **Configura la página principal**: Ve a **Ajustes > Lectura** y selecciona "Una página estática" como página principal, eligiendo la página que uses como front-page (generalmente creada automáticamente).

## Configuración General

### Opciones de Tema
El tema incluye opciones personalizables en **Apariencia > Personalizar**:
- **Imagen del banner**: Sube una imagen para el cintillo superior.
- **Texto alternativo del banner**: Descripción para accesibilidad.
- **Descripción del sitio**: Texto debajo del título del sitio.
- **Imagen del menú**: Imagen opcional debajo del menú de navegación.
- **Imagen del menú**: Imagen opcional debajo del menú.

### Tamaños de Imagen
El tema define tamaños personalizados:
- **blog-card**: 600x400 píxeles para imágenes de noticias.
- Usa el regenerador de miniaturas si cambias imágenes existentes.

## Header (Cabecera)

El header incluye el banner, título del sitio, descripción, menú y una imagen opcional.

### Configuración
1. **Banner**: En **Personalizar > Imagen del banner**, sube una imagen (recomendado: 1024x200 píxeles o similar).
2. **Título y descripción**: Se toman de **Ajustes > General**. El título se muestra en grande con una línea azul decorativa.
3. **Menú de navegación**: Para la página principal, incluye enlaces a secciones (#noticias, #pnf, #nosotros, #contactanos). Para otras páginas, usa el menú asignado en **Apariencia > Menús**.
4. **Imagen debajo del menú**: Opcional, sube en **Personalizar > Imagen del menú**.

### Personalización
- La línea azul debajo del título es responsiva (más ancha en desktop).
- El menú es responsive: vertical en móviles, horizontal en pantallas más grandes.

## Secciones de la Página Principal

La página principal (`front-page.php`) muestra secciones dinámicas.

### 1. Sección PNF Disponibles
Muestra tarjetas de programas basadas en un menú de WordPress.

#### Configuración
1. Crea páginas para cada PNF (ej. "PNF Informática").
2. Ve a **Apariencia > Menús** y crea un menú llamado "PNF Disponibles".
3. Agrega las páginas creadas al menú.
4. Asigna el menú a la ubicación "PNF Disponibles".

#### Apariencia
- Tarjetas con imagen destacada, título y hover effects.
- Layout flexible: se adapta al número de items.
- Centrado y responsive.

### 2. Sección Últimas Noticias
Muestra las últimas entradas (posts) en layout tipo Pinterest.

#### Configuración
1. Crea entradas en **Entradas > Añadir nueva**.
2. Agrega imagen destacada a cada entrada.
3. El tema muestra las 8 últimas entradas publicadas.

#### Apariencia
- Columnas responsivas (1 en móvil, 2 en sm, 3 en md+).
- Imágenes sin recorte, alturas variables.
- Tarjetas con sombra, título, extracto y autor.

### 3. Sección Nosotros
Incrusta el contenido de una página llamada "Nosotros".

#### Configuración
1. Crea una página titulada exactamente "Nosotros" en **Páginas > Añadir nueva**.
2. Agrega contenido (texto, imágenes, bloques).
3. Publica la página.

#### Apariencia
- Contenido centrado con estilos de texto (prose).
- Sin título fijo; incluye el título en el contenido si deseas.

### 4. Sección Contactanos (Footer)
Incrusta el contenido de una página llamada "Contactanos" como footer.

#### Configuración
1. Crea una página titulada exactamente "Contactanos".
2. Agrega información de contacto, formularios, etc.
3. Publica la página.

#### Apariencia
- Fondo gris claro.
- Contenido centrado.
- Identificado con id="contactanos" para navegación.

## Footer

El footer muestra la sección Contactanos. No hay configuración adicional; se controla desde la página "Contactanos".

## Personalización Adicional

### Estilos
- Usa Tailwind CSS; modifica `src/input.css` y compila con `pnpm run build:css`.
- Clases responsive: `sm:`, `md:`, `lg:` para diferentes pantallas.

### Funcionalidades
- **Comentarios**: Deshabilitados en la página principal.
- **Widgets**: Área de sidebar disponible, pero no usada en front-page.
- **SEO**: Compatible con Yoast SEO u otros plugins.

### Archivos Clave Modificados
- `front-page.php`: Página principal con secciones.
- `header.php`: Cabecera con banner y menú.
- `footer.php`: Footer con sección Contactanos.
- `functions.php`: Tamaños de imagen, menús, soporte de features.
- `template-parts/content-blog-card.php`: Tarjetas de noticias.
- `style.css` y `tailwind.config.js`: Estilos.

### Solución de Problemas
- **Contenido no se muestra**: Asegura que las páginas estén publicadas y con contenido.
- **Imágenes borrosas**: Regenera miniaturas con un plugin como "Regenerate Thumbnails".
- **Menús no aparecen**: Asigna menús a las ubicaciones correctas.
- **Estilos no aplican**: Ejecuta `pnpm run build:css` después de cambios.

### Actualizaciones
- Para modificar secciones, edita `front-page.php`.
- Agrega nuevas secciones copiando el patrón de las existentes.
- Para soporte, revisa la consola de desarrollador para errores.

Este tema es completamente funcional y listo para uso. Si necesitas más personalizaciones, contacta al desarrollador. ¡Disfruta tu sitio web!
