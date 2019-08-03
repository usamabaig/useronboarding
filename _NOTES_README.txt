INSTALLATION:

Copy .env.example to .env
Create `kb_user_onboarding` database (or rename in .env)
Run:
composer update
composer dump-autoload
php artisan migrate --seed

Open a terminal window, cd to this directory and run:
php artisan serve --port=9999

Open a 2nd terminal window, cd to this directory and run:
npm run watch
(this will monitor the files specified in webpack.mix.js for changes, and auto-build per the config in that file, every time any of the source files are changed)

To see the UI, go to http://localhost:9999
