# Aldeafpa - Tema WordPress para Instituciones Educativas

**Aldeafpa** es un tema moderno y elegante diseñado específicamente para instituciones educativas. Construido sobre el framework Tailwind CSS v4.1.17, ofrece un diseño limpio, responsive y completamente personalizable a través del panel de administración de WordPress.

## ✨ Características Principales

### 🎨 Diseño Moderno

- **Framework CSS:** Tailwind CSS v4.1.17 para un desarrollo ágil y consistente
- **Diseño Responsive:** Optimizado para todos los dispositivos (móvil, tablet, desktop)
- **Tipografía Elegante:** Fuentes serif para un aspecto institucional y profesional

### 🖼️ Sistema de Imágenes Personalizables

- **Cintillo/Banner:** Imagen principal configurable desde el Personalizador
- **Texto Alternativo:** Configurable para accesibilidad SEO
- **Fallback Automático:** Imagen por defecto si no se configura ninguna

### 📝 Contenido Personalizable

- **Título del Sitio:** Nombre de la institución
- **Descripción:** Texto descriptivo configurable
- **Menú de Navegación:** Sistema completo con fallback automático

### 📰 Sistema de Entradas

- **Página de Noticias:** Diseño de grid responsive para mostrar entradas
- **Paginación:** Navegación intuitiva entre páginas
- **Extractos:** Resúmenes automáticos de las entradas
- **Metadatos:** Fecha y autor de cada entrada

### ⚙️ Panel de Personalización

- **Sección Dedicada:** "Imágenes del Tema" en Apariencia → Personalizar
- **Configuraciones en Tiempo Real:** Vista previa instantánea de cambios
- **Campos de Texto:** Descripción y texto alternativo editables

## 🚀 Instalación y Configuración

### Requisitos del Sistema

- **WordPress:** Versión 5.0 o superior
- **PHP:** Versión 7.4 o superior
- **Node.js:** Versión 16.0 o superior (para desarrollo)
- **Composer:** Para dependencias PHP

### Instalación del Tema

1. **Descarga o clona** el repositorio en `wp-content/themes/`
2. **Activa el tema** desde Apariencia → Temas en WordPress Admin
3. **Configura la página principal** como estática en Ajustes → Lectura

### Configuración Inicial

```bash
# Instalar dependencias de desarrollo
npm install

# Compilar CSS (desarrollo)
npm run watch

# Compilar CSS (producción)
npm run build
```

## 🎛️ Personalización

### Imágenes y Contenido

1. Ve a **Apariencia → Personalizar**
2. Selecciona **"Imágenes del Tema"**
3. **Sube/Configura:**
   - Imagen del cintillo/banner
   - Texto alternativo para accesibilidad
   - Descripción del sitio

### Menú de Navegación

1. Ve a **Apariencia → Menús**
2. Crea un nuevo menú y asígnalo a **"Primary"**
3. Si no hay menú, aparecerá automáticamente "Inicio"

### Página de Entradas

1. Crea una página llamada **"Blog"** o **"Noticias"**
2. Ve a **Ajustes → Lectura**
3. Selecciona **"Una página estática"** y asigna la página de entradas

## 🛠️ Desarrollo

### Estructura del Proyecto

```text
aldeafpa/
├── src/
│   └── input.css          # Archivo CSS de entrada (Tailwind)
├── inc/
│   ├── customizer.php     # Configuraciones del personalizador
│   └── custom-header.php  # Funciones del header
├── js/
│   └── customizer.js      # JavaScript del personalizador
├── template-parts/        # Partes de plantilla reutilizables
├── page.php              # Plantilla de páginas
├── single.php            # Plantilla de entradas individuales
├── index.php             # Página de entradas/noticias
├── front-page.php        # Página principal personalizada
├── functions.php         # Funciones principales del tema
├── header.php            # Cabecera del sitio
├── footer.php            # Pie de página
└── style.css             # CSS compilado
```

### Comandos de Desarrollo

```bash
# Modo desarrollo (watch automático)
npm run watch

# Compilación completa
npm run build

# Limpiar archivos compilados
npm run clean
```

### Tecnologías Utilizadas

- **Tailwind CSS v4.1.17:** Framework CSS utility-first
- **PostCSS:** Procesador CSS con autoprefixer
- **WordPress Coding Standards:** Estándares de desarrollo
- **ES Modules:** JavaScript moderno

## 📱 Responsive Design

El tema está completamente optimizado para:

- **Móviles:** Diseño de una columna, menús apilados
- **Tablets:** Layout adaptativo, navegación horizontal
- **Desktop:** Diseño completo con múltiples columnas

### Breakpoints Utilizados

- `sm:` 640px y superior
- `md:` 768px y superior
- `lg:` 1024px y superior
- `xl:` 1280px y superior

## 🔧 Funcionalidades Avanzadas

### Sistema de Cache

- Compatible con plugins de cache populares
- Optimización automática de assets
- Lazy loading de imágenes

### SEO y Accesibilidad

- Estructura HTML5 semántica
- Atributos alt en imágenes configurables
- Navegación por teclado
- Contraste de colores adecuado

### Internacionalización

- Preparado para múltiples idiomas
- Text domain: `aldeafpa`
- Archivos de traducción en `/languages/`

## 📄 Licencia

Este tema está bajo la licencia **GPLv2 o posterior**.

## 🤝 Soporte

Para soporte técnico o reportar problemas:

- Crea un issue en el repositorio
- Revisa la documentación en el código
- Consulta las mejores prácticas de WordPress

---

**Desarrollado con ❤️ para instituciones educativas que buscan excelencia en su presencia digital.**
