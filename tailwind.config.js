/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        raka: {
          red: "#B3122E",
          cream: "#FDF6EC",
          gold: "#E8A33D",
          dark: "#2B1B12",
        },
      },
    },
  },
  plugins: [],
}