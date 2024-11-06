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
        'main-blue': '#08143D',
        'lilac':'#6883DE',
        'green':'#0B5351',
        'lightB':'#68A8DE',

      },
      fontFamily: {
        Coda: ['Coda'],
        Poppins: ['Poppins']
      },
    
    },
  },
  plugins: [],
}

