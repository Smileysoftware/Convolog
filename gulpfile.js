var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['styles.scss'] , 'resources/css/');
});

elixir(function(mix) {
    mix.stylesIn("public/css");
});

elixir(function(mix) {
    mix.styles([
        "normalize.css",
        "foundation.min.css",
        "styles.css"
    ], 'public/css/all.css');
});