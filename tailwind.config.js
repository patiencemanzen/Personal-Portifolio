/** @type {import('tailwindcss').Config} */
const { colors: defaultColors } = require('tailwindcss/defaultTheme')

const colors = {
    ...defaultColors,
    ...{
        "deep-green": {
            "900": "#04293A",
            "800": "#111827"
        },
        "deep-text": {
            "900": "#72acfe"
        },
        "highlight-primary": {
            "900": "#7ee787"
        },
        "highlight-secondary": {
            "900": "#00bfff"
        },
        "highlight-third": {
            "900": "#939aff"
        },
        "dark-gray": {
            "900": "#d3c7db"
        }
    },
}

module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
      ],
    theme: {
        extend: {
            fontSize: {
                '30xl': '20rem',
                'heroSm': '40px',
            }
        },
        fontFamily: {
            'anek': ['"Anek Telugu"', 'sans-serif'],
            'calistoga': ['"Calistoga"', 'cursive'],
        },
        "colors": colors,
    },
    plugins: [
        require('flowbite/plugin')
    ]
}
