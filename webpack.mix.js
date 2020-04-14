let mix = require('laravel-mix')
    .setPublicPath(path.normalize('public'));

mix.js('resources/assets/js/main.js', 'public/js')
   .sass('resources/assets/sass/main.scss', 'public/css')
   .copy('resources/assets/images', 'public/images');
