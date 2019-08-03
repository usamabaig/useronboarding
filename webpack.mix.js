let mix = require("laravel-mix");

const tailwindcss = require("tailwindcss");

// Removes unused CSS
// According to Discord chat: Running Purge CSS as part of Post CSS is a ton faster than laravel-mix-purgecss
// But if that doesn't work use https://github.com/spatie/laravel-mix-purgecss
const purgecss = require("@fullhuman/postcss-purgecss")({
    // Specify the paths to all of the template files in your project
    content: [
        "./resources/views/*.php",
        "./resources/views/**/*.php",
        "./resources/js/components/*.vue",
        "./resources/js/components/**/*.vue",

        "./resources/js/test/**/*.vue",
        "./resources/js/test/**/**/*.vue"
    ],

    // Include any special characters you're using in this regular expression
    defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.options({
    clearConsole: true, // in watch mode, clears console after every build
    processCssUrls: false,
    postCss: [
        //require('tailwindcss'),
        tailwindcss("./tailwind.config.js"),

        // to enable purgecss on production only
        ...(process.env.NODE_ENV === "production" ? [purgecss] : [])

        // to enable on all environments, local and production
        //purgecss
    ]
})

    .js("resources/js/app.js", "public/js")
    .js(
        "resources/js/test/iview/test_iview_ui_framework.js",
        "public/js/test/iview/test_iview_ui_framework.js"
    )
    .js(
        "resources/js/test/element/test_element_ui_framework.js",
        "public/js/test/element/test_element_ui_framework.js"
    )
    .js(
        "resources/js/test/iview_element/test_combined_iview_element_ui_frameworks.js",
        "public/js/test/iview_element/test_combined_iview_element_ui_frameworks.js"
    )

    //.sass('resources/sass/libs/normalize.scss', 'public/css/libs')
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/test.scss", "public/css")

    // libraries
    // tailwindcss: see https://tailwindcss.com/docs/installation#laravel-mix
    .sass("resources/sass/my_tailwind.scss", "public/css")

    // for the KeenBrain logo
    .sass("resources/sass/logo.scss", "public/css")

    // copy all images
    .copy("resources/img", "public/img")

    // for the test pages list
    .sass(
        "resources/sass/test/test_pages_list.scss",
        "public/css/test/test_pages_list.css"
    )

    // for the contact form javascript
    .js(
        "resources/js/components/contact_form/contact_form.js",
        "public/js/components/contact_form/contact_form.js"
    );
