import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['"Abhaya Libre"', 'serif'], // Default font
                Yesteryear: ['Yesteryear', 'cursive'], // Custom font
                Abhaya : ['Abhaya Libre', 'serif'], // Custom font
                popins : ['Poppins', 'sans-serif'], // Custom font


            },
            animation: {
                'infinite-scroll': 'infinite-scroll 25s linear infinite',
            },
            keyframes: {
                'infinite-scroll': {
                    from: { transform: 'translateX(0)' },
                    to: { transform: 'translateX(-100%)' },
                }
            }  ,
            colors: {
                'gradient-start': 'rgba(255, 13, 2, 1)',  // Starting color of your gradient
                'gradient-end': 'rgba(29, 69, 130, 1)',   // Ending color of your gradient
                'custom-font': '#ffffff',                // Font color, typically white or a contrasting color
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(90deg, rgba(255, 13, 2, 1) 0%, rgba(29, 69, 130, 1) 100%)',
                'button-gradient': 'linear-gradient(90deg, rgba(255,13,2,1) 0%, rgba(142,7,0,1) 72%, rgba(128,6,0,1) 100%)',
            },
        },
    },

    plugins: [forms],
};
