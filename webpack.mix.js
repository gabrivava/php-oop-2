// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('src/css/app.scss', 'css')
.setPublicPath('dist');