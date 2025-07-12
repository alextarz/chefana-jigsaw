module.exports = {
    content: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
};