var elixir = require('laravel-elixir');

require('es6-promise').polyfill();

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // mix.less('app.less')
    //     .version(["public/css/all.css"]);
    // mix.sass('app.scss');
    mix.styles([
        'test.css',
    ]);
});


// elixir(function(mix) {
//     mix.less('app.less')
//         .sass('main.scss')
//         .styles([
//             'test1.css'
//         ], 'public/css/all.css', 'public/css')
//         .version(["public/css/all.css"]);
// });