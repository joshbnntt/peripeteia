var elixir = require('laravel-elixir');

/*
 |----------------------------------------------------------------
 | Have a Drink!
 |----------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic
 | Gulp tasks for your Laravel application. Elixir supports
 | several common CSS, JavaScript and even testing tools!
 |
 */

elixir(function(mix) {
    mix.sass("app.scss")
       .scripts([
            '../resources/assets/js/jquery/jquery.js',
            '../resources/assets/js/foundation/foundation.js',
            '../resources/assets/js/app.js'
         ])
       .styles('css/app.css');
});
