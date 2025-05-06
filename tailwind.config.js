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
        'bebas': ['"Bebas Neue"', 'cursive']  
      },
      animation: {
        marquee_left: 'marquee_left 20s linear infinite',
        marquee_right: 'marquee_right 20s linear infinite'
      },
      keyframes: {
        marquee_left: {
          '0%': { transform: 'translateX(-100%)' },
          '100%': { transform: 'translateX(0%)' },
        },
        marquee_right: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
      },

      backgroundImage : {
        'brand' : "linear-gradient(to bottom, black, rgb(59, 7, 100))"
      }
    },
  },
  plugins: [],
}
