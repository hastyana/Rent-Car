/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false,
  theme: {
    extend: {
      backgroundColor: ['active'],
      variants: {
        display:['group-hover']
      },
      fontFamily: {
        inter: "'Inter', sans-serif",
        ptserif: "'PT Serif', serif",
        montserrat: "'Montserrat', sans-serif"
      },
    },
  },
  plugins: [
    
  ],
}
