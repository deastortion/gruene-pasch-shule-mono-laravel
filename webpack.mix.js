const mix = require('laravel-mix');

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
// ==== FRONTEND ====
// Home
mix.sass('resources/sass/pages/frontend/home/index/index.scss', 'public/assets/css/frontend/home');
// Events
mix.sass('resources/sass/pages/frontend/events/index/index.scss', 'public/assets/css/frontend/events');
mix.sass('resources/sass/pages/frontend/events/show/show.scss', 'public/assets/css/frontend/events');


// ==== AUTH =====
// Login
mix.sass('resources/sass/pages/auth/login/styles.scss', 'public/assets/css/auth/login');
// Register
mix.sass('resources/sass/pages/auth/register/styles.scss', 'public/assets/css/auth/register');


// ==== BACKEND ====
// Home
mix.sass('resources/sass/pages/backend/home/index/index.scss', 'public/assets/css/backend/home');
// Events
mix.sass('resources/sass/pages/backend/events/index/index.scss', 'public/assets/css/backend/events');
mix.sass('resources/sass/pages/backend/events/create/create.scss', 'public/assets/css/backend/events');
mix.sass('resources/sass/pages/backend/events/show/show.scss', 'public/assets/css/backend/events');
// Users
mix.sass('resources/sass/pages/backend/users/index/index.scss', 'public/assets/css/backend/users');
mix.sass('resources/sass/pages/backend/users/show/show.scss', 'public/assets/css/backend/users');
// Profile
mix.sass('resources/sass/pages/frontend/profile/profile.scss', 'public/assets/css/frontend');









mix.browserSync('http://127.0.0.1:8000/');
