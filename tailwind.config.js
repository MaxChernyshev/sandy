
/** @type {import('tailwindcss').Config} */

// const colors = require('tailwindcss/colors');

// @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
        },
        colors: {
            // gray: colors.coolGray,
            // blue: colors.lightBlue,
            // red: colors.rose,
            // pink: colors.fuchsia,
        },
        fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            // serif: ['Merriweather', 'serif'],
        },
    },
    plugins: [],
}
