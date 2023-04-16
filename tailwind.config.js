/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: '1rem',
      },
      screens: {
        'hd': '1440px',
        '8xl': '1440px',
      },
      colors: {
        'main-color': '#05204B',
        'main-color-light': '#062A5A',
        'secondary-color': '#D4AF37',
        'secondary-color-light': '#CFB53B',
        'main-white': '#F2F2F2', 
      }
    },
  },
  plugins: [
    require('daisyui'),
  ],
}

