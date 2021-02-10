const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').vue({ version: 2 })
   .postCss('resources/css/main.css', 'public/css', [
       tailwindcss('./tailwind.js')
   ]);

if(mix.inProduction()) {
    mix.purgeCss({

        enabled: true,

        globs: [
            path.join(__dirname, "resources/views/**/*.blade.php"),
            path.join(__dirname, "resources/js/**/*.vue")
            ],

        extensions: ['html', 'js', 'php', 'vue'],

    });

    mix.version();
}
