/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,js}", "./pages/**/*.{php,js}", "./components/**/*.{php,js}" , "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      colors: {
        default: {
          80: "#082f49",
        },
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
};
