const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

var assetsPath = 'public/assets/';

elixir(function (mix) {

    // Sass files
    mix.sass('frontend/frontend.scss', assetsPath + 'css/');
    mix.sass('backend/backend.scss', assetsPath + 'css/');

    // Copy fonts
    mix.copy(['resources/assets/fonts', 'resources/assets/talvbansal/media-manager/fonts'], assetsPath + 'fonts');

    // JavaScripts
    mix.webpack('frontend/frontend.js', assetsPath + 'js/');
    mix.webpack('frontend/modernizr-custom.js', assetsPath + 'js/');

    // Copy images
    mix.copy(['resources/assets/images'], assetsPath + 'images');

    // Version the assets
    mix.version([

            // CSS files
            assetsPath + 'css/frontend.css',
            assetsPath + 'css/backend.css',

            // JS files
            assetsPath + 'js/frontend.js',
        ]);
});
