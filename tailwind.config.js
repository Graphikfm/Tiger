const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './public/**/*.html',
    '.src/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.trueGray,
      indigo: colors.indigo,
      red: colors.rose,
      yellow: colors.amber,
      predator: {
        DEFAULT: '#00FF08',
        50: '#E5FFE6',
        100: '#CCFFCE',
        200: '#99FF9C',
        300: '#66FF6B',
        400: '#33FF39',
        500: '#00FF08',
        600: '#00CC06',
        700: '#009905',
        800: '#006603',
        900: '#003302',
      },

    },
    extend: {},
  },
  variants: {
    extend: {
      opacity: ['disabled'],
    },
  },
  plugins: [],
};
