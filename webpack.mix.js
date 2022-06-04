const mix = require('laravel-mix');

mix .setPublicPath('./wp-content/themes/portfolio/public')
    .setResourceRoot("../")
    .copyDirectory('wp-content/themes/portfolio/resources/fonts', 'wp-content/themes/portfolio/public/fonts')
    .js('wp-content/themes/portfolio/resources/js/script.js', 'wp-content/themes/portfolio/public/js/')
    .sass('wp-content/themes/portfolio/resources/sass/style.scss', 'wp-content/themes/portfolio/public/css/')

