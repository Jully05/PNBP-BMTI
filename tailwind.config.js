/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        sans: ['Roboto', 'Arial', 'sans-serif'], // Font untuk teks body
        serif: ['Playfair Display', 'Georgia', 'serif'], // Font untuk heading
        mono: ['Roboto Mono', 'Courier New', 'monospace'], // Font monospace untuk kode
      },
    
    },
  },
  plugins: [],
}