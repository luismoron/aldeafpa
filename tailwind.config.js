/** @type {import('tailwindcss').Config} */
export default {
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