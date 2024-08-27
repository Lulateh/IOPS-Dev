/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'main-green': '#26413C',
        'secondary-green': '#03120E',
        'cream' : '#F4EBD9',
      },
      fontFamily: {
        Coda: ['Coda']
      }
    },
  },
  plugins: [],
}

