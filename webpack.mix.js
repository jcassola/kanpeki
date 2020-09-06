require("dotenv").config();
const mix = require("laravel-mix");

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

mix
  .js("resources/js/app.js", "public/js")
  .sass("resources/sass/app.scss", "public/css")
  .copy("resources/assets/images", "public/images")
  .webpackConfig({
    module: {
      rules: [
        {
          enforce: "pre",
          test: /\.(js|vue)$/,
          loader: "eslint-loader",
          exclude: /node_modules/
        }
      ]
    }
  })
  .browserSync({
    /*eslint-disable */
    proxy: process.env.APP_URL,
    open: false
  });
