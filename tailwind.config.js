/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#272020',
        secondary: '#CE983E'
      },
      fontFamily: {
        antonio: ['Antonio', 'sans-serif'],
        montserrat: ['Montserrat', 'system-ui'],
        lhcencoreregular: ['LHF Encore Regular']
      },
    },
  },
  plugins: [],
}

