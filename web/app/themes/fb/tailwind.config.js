const plugin = require('tailwindcss/plugin')

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
    fill: theme => ({
      'red': theme('colors.red.600'),
      'allo-claro': theme('colors.allo-claro'),
    }),
    extend: {
      typography: {
        DEFAULT: {
          css: {
            maxWidth: 'auto,'
          },
        },
      },
      letterSpacing: {
        max: '.25em',
      },
      fontFamily: {
        'sans': ['arial', 'sans-serif'],
        'serif': ['times-new-roman', 'serif'],
       },
      colors: {
        'negro-fb':'#3e2b2f',
        'gris-fb':'#ada3a4',
        'allo':'#ffff00',
        'allo-claro':'#dbffe9',
        'azul':'#0000ff',
      },
      backgroundImage: theme => ({
        'fondo': "url('../images/bg.svg')",
        'tk-triangulo': "url('../images/triangulo-ticket.svg')",
        'tk-triangulo-down': "url('../images/triangulo-ticket-down.svg')",
        'fondo-claro': "url('../images/bg-claro.svg')",
        'fondo-medio': "url('../images/bg-medio.svg')",
        'punteado': "url('../images/punteado-cupon.svg')",
       }),
    },
  },
  variants: {
    extend: {
      borderWidth: ['last'],
    },
  },
  plugins: [
    require('tailwindcss-debug-screens'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    plugin(function({ addComponents }) {
      const textos = {
        '.nav-item': {
          textShadow: '0.1em 0.1em 0 #000',
          textTransform: 'uppercase',
          fontSize: '1.5rem',
          letterSpacing: '0.2em',
          lineHeight: '1em',
          color: '#fff'
        }
      }
      const botones = {
        '.btn': {
          border: '1px solid #000',
          backgroundColor: '#fff',
          textTransform: 'uppercase',
          letterSpacing: '0.2em',
          fontWeight: 'bold',
          fontSize: '0.8rem',
          color: '#000',
          padding: '0.7em 1em 0.6em'
        }
      }
      addComponents([textos, botones])
    })
  ],
};
