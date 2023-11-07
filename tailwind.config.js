/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js",
            "./resources/**/*.js",
            "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",],
  theme: {
    fontFamily: {
      poppins: ['Poppins', 'sans'],
      lato: ['Lato', 'sans'],
      roboto: ['Roboto', 'sans'],
      fontawesome: ['FontAwesome', 'sans'],
    },
    extend: {},
  },
  plugins: [],
}

