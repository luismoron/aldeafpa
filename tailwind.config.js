/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './template-parts/**/*.php',
    './inc/**/*.php',
    './js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        serif: ['serif'],
      },
    },
  },
  plugins: [],
};