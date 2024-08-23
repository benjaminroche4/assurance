/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./assets/react/controllers/*.jsx",
  ],
  theme: {
    extend: {
      'colors': {
        'primary': {
          light: '#2fdc6e',
          DEFAULT: '#3BC271',
        },
        'secondary': {
          DEFAULT: '#124660',
        },
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
}

