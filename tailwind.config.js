/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#272020',
        secondary: '#CE983E',
        terciary: '#564C49'
      },
      fontFamily: {
        antonio: ['Antonio', 'sans-serif'],
        montserrat: ['Montserrat', 'system-ui'],
        lhcencoreregular: ['Cormorant Garamond', 'serif']
      },
      animation: {
        'pulse-slow': 'pulse 2s infinite',
      },
      keyframes: {
        pulse: {
          '0%, 100%': { transform: 'scale(1)'},
          '50%': { transform: 'scale(1.1)'},
        },
      },
    },
  },
  plugins: [],
};
