/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'sans': ['Poppins', 'sans-serif'],
      'title': ['ITC Benguiat Std', 'sans-serif']
    },
    extend: {
      colors: {
        clifford: '#da373d',
      }
    }
  },
  plugins: [],
}

