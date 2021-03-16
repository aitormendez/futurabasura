module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'sans': ['arial', 'sans-serif'],
        'serif': ['times-new-roman', 'serif'],
       },
      colors: {},
      backgroundImage: theme => ({
        'fondo': "url('../images/bg.svg')",
       }),
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
