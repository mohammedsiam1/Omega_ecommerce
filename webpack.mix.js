let mix = require('laravel-mix');
require('laravel-mix-imagemin');
require('laravel-mix-purgecss');



mix.js('assets/js/app.js', 'dist/js')
    .sass('assets/sass/app.scss', 'dist/css')
    .sass('assets/sass/app-rtl.scss', 'dist/css')
    .purgeCss({
        // Specify the paths to all of the template files in your project
        content: [
            './**/*.html',
            './assets/**/*.js',
            // etc.
        ],
        whitelistPatterns: [
            /tooltip/,
            /tooltip$/,
        ],
        // Include any special characters you're using in this regular expression
        defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
    })
    .imagemin(
        'images/**/*.*',
        {
            context: 'assets',
        },
        {
            optipng: {
                optimizationLevel: 5
            },
            jpegtran: null,
            plugins: [
                require('imagemin-mozjpeg')({
                    quality: 75,
                    progressive: true,
                }),
            ],
        }
    );