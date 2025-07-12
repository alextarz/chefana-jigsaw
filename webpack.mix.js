const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

// Отключаем уведомления
mix.disableNotifications();

// Устанавливаем путь для собранных файлов
mix.setPublicPath('source/assets/build');

// Основная сборка
mix.js('source/_assets/js/main.js', 'js')
   .postCss('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
   .version();

// Source maps только в development
if (!mix.inProduction()) {
    mix.sourceMaps();
}