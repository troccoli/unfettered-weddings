const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Noto Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'uw-pink': {
                    DEFAULT: '#ffeeea',
                },
                'uw-gray': {
                    DEFAULT: '#3c3c3c',
                }
            },
            width: {
                'mobile-logo': '180px',
                'tablet-logo': '270px',
                'desktop-logo': '300px',
            },
            height: {
                'mobile-logo': '180px',
                'tablet-logo': '270px',
                'desktop-logo': '300px',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
