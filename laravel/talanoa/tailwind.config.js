const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#4E73DF',
                success: '#1CC88A',
                info: '#36B9CC',
                warning: '#F6C23E',
                danger: '#E74A3B',
                secondary: '#858796',
                light: '#F8F9FC',
                dark: '#5A5C69',
                outline: '#E1E1E1',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
