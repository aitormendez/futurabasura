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
      colors: {
        'negro-fb':'#3e2b2f',
        'gris-fb':'#ada3a4',
        'allo':'#ffff00',
        'azul':'#0000ff',
      },
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
