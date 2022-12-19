/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')
//import laravel, { refreshPaths } from 'laravel-vite-plugin';

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
            danger: colors.rose,
            primary: colors.blue,
            success: colors.green,
            warning: colors.yellow,
        },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    // laravel({
    //     input: [
    //         'resources/css/app.css',
    //         'resources/js/app.js',
    //     ],
    //     refresh: [
    //         ...refreshPaths,
    //         'app/Http/Livewire/**',
    //         'app/Tables/Columns/**',
    //     ],
    // }),
  ],
}
