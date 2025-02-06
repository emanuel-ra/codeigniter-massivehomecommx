/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/**/*.html',
    './app/Views/**/*.php',
  ],
  theme: {
    extend: {
      gridTemplateRows: {
        '[auto,auto,1fr]': 'auto auto 1fr',
      },
    },
  },
  plugins: [],
}

