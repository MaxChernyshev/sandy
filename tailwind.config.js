/** @type {import('tailwindcss').Config} */

import laravel from 'laravel-vite-plugin';

// const colors = require('tailwindcss/colors');

// @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
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
            red: '#BF1E2D',
            black: '#231F20',
            white: '#FFFFFF',
            grey: '#BFC2C9',
            lightGrey: '#E9EAEC',
        },
        fontFamily: {
            mySans: ['Bree Serif', 'sans-serif'],
        },
    },
    plugins: [
        laravel({
            input: ['resources/front/css/app.css', 'resources/front/js/app.js'],
            refresh: true,
        }),
    ]
}
