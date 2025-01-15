/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        cinzel: "'Cinzel', serif",
        quicksand: "'Quicksand', sans-serif",
        dancingScript: "'Dancing Script', cursive",
        "josefin-sans": "'Josefin Sans', sans-serif",
        geologica: "'Geologica', sans-serif",
        raleway: "'Raleway', sans-serif",
        roboto: "'Roboto', sans-serif"
      },
      colors: {
        bgBlack: "#08080C",
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms")
  ],
}

