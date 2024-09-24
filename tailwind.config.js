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
        'card-bg': '#BCC4C3',
        'cream' : '#F4EBD9',
        'lilac' : '717EC3',
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

