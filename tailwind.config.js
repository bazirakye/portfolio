/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
  content: [
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./*.html",
    "./ecommerce/*.html",
    "./assets/**/*.js"

  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("tailgrids/plugin")
  ],
}

