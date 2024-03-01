/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'selector',
    theme: {
        extend: {
            spacing: {
                '128': '32rem',
            },
            fontSize: {
                'xxs': ['0.65rem', {lineHeight: '1.1rem'}]
            }
        },
    },
    plugins: [],
}

