/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        accent: '#3A5BA9',
        accentHover: '#4d6bb1',
        red: '#F33746',
        green: '#1FA37E',
        light: '#949494',
        border: '#ADB1B9',
        text: '#2E425F'
      },
      fontSize: {
        DEFAULT: '16px'
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}