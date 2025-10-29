/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./components/*.php', './pages/**/*.php'],
  theme: {
    colors: {
      primary: 'rgb(180, 148, 99)',
      dark: 'rgb(15, 15, 15)',
      white: 'rgb(255, 255, 255)',
      overlay: 'rgba(0, 0, 0, 0.8)',
      light: 'rgb(246, 246, 246)',
    },
    fontFamily: {
      sans: ['Lato', 'sans-serif'],
    },
    screens: {
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px',
    },
    extend: {
      zIndex: {
        '1': '1',
        '2': '2',
      },
      gridTemplateColumns: {
        '2-auto': 'repeat(2, auto)',
      },
    },
  },
  plugins: [],
}
