import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                mermud: {
                    300: "#f9a8d4"
                },
                'abu': '#1f2235',
                'oren': '#ff9800',
                'abumuda': '#2c2f48',
                'putihabu': '#e0e0e0',
                'merah': '#e84118',
                'biru': '#00a8ff',
                'birutua': '#2a2d5c'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat'],
                poppins: ['Poppins'],
                berkshire: ['Berkshire Swash'],
                windsong: ['WindSong'],
                parisienne: ['Parisienne'],
                nautigal : ['The Nautigal'],
                sans3 : ['Source Sans 3'],
                abril : ['Abril Fatface']
            },
        },
    },
    plugins: [],
};
