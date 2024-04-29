/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        screens: {
            sc280: '279px',
            sc300: '300px',
            sc360: '360px',
            sc400: '400px',
            sc448: '448px',
            sc500: '500px',
            sc720: '720px',
            sc770: '770px',
            sc800: '800px',
            sc960: '960px',
            sc1040: '1040px',
            sc1080: '1080px',
            sc1120: '1120px',
            sc1226: '1226px',
            sc1232: '1232px',
            sc1300: '1300px',
            sc1400: '1400px',
            sc1500: '1500px',
            sc1600: '1600px',
            sc1700: '1700px',
            sc1800: '1800px',
            sc1900: '1900px',
            sc2000: '2000px',
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
        },
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')({
            charts: true,
        }),
        // ... other plugins
    ]
}