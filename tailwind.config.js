const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js'
    ],
    theme: {
        fontFamily: {
            sans: ['Noto Sans', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            red: colors.red,
            yellow: colors.yellow,
            green: colors.green,
            blue: colors.blue,
            pink: colors.pink,
            'uw-pink': '#ffeeea',
            'uw-gray': '#3c3c3c'
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
