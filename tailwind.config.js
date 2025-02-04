import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: {
        files: [
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
            './node_modules/preline/dist/*.js',
        ]
    },

    theme: {
        extend: {
            fontFamily: {
                custom: ["Poppins", "sans-serif"],
            },
            screens: {
                'xs': '374px',
            },
            fontSize: {
                'svg-xl': '2rem',
                'sm-svg-xl': '2rem',
                'lg-svg-xl': '2rem',
                'xl-svg-xl': '2rem',
                'svg-base': '8vw',
                'sm-svg-base': '4vw',
                'lg-svg-base': '2vw',
                'xl-svg-base': '1vw',
            },
        },
    },

    plugins: [
        forms,
        require('tailwindcss-svg'),
        require('preline/plugin'),
    ],
    darkMode: 'media',
};
