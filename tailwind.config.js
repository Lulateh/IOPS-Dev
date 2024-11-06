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


        'main-green': '#26413C',
        'secondary-green': '#03120E',
        'card-bg': '#BCC4C3',
        'cream' : '#F4EBD9',
        'light-blue' : 'DCFFFD',
        'card-bg': '#BCC4C3'

      },
      fontFamily: {
        Coda: ['Coda'],
        Poppins: ['Poppins']
      },
    
    },
  },
  plugins: [],
}

