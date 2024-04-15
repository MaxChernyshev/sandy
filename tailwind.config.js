/** @type {import('tailwindcss').Config} */

import laravel from 'laravel-vite-plugin';

const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
    ],
    theme: {
        extend: {
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
                // gray: '#808080',
                lightGrey: '#E9EAEC',
            },
            fontFamily: {
                mySans: ['Bree Serif', 'sans-serif'],
            },
        },
    },
    plugins: [
        laravel({
            input: ['resources/front/css/app.css', 'resources/front/js/app.js'],
            refresh: true,
        }),
    ]
}
