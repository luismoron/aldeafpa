module.exports = {
  content: [
    './*.php',                // <-- ESTO ES CLAVE: Busca en la raíz (front-page.php, header.php)
    './template-parts/**/*.php', // Busca en subcarpetas
    './inc/**/*.php',
    './js/**/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}