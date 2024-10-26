/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      colors : {
        'primary': '#50B370',
        'primary-light': '#74c28d',
        'primary-dark': '#3f9159',
        'secondary': '#3f9159',
        'secondary-light': '#7481c2',
        'secondary-dark': '#3f4d91',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

