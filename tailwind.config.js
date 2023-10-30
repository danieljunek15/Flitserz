module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontSize: {
      '2xs': '0.6rem',
      '1xs': '0.67rem',
      'xs': '0.75rem',
      'sm': '0.8rem',
      'base': '1rem',
      'xl': '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
    },
    extend: {
      colors: {
        'dark-purpleblue': '#230e63',
      },
      height: {
        '500': '32rem',
      },
      spacing: {
        '34': '7.7rem',
      }
    },
  },
  plugins: [],
}
