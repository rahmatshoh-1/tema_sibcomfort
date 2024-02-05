import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontFamily: {
          sans: ['sans-serif'],
          sourceSans: ['SourceSans', 'sans-serif']
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            gridRow: {
              "span-8": "span 8 / span 8",
              "span-16": "span 16 / span 16",
            },
          },
          container: {
            screens: {
              sm: '600px',
              md: '728px',
              lg: '984px',
              xl: '1320px',
              '2xl': '1496px',
            },
          },
    },

    plugins: [forms, typography],
};
