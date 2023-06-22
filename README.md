# API

Purpose of this application/site is to be API provider.  

Using seeder (<em><strong>--seed</strong> option in the installation instructions below</em>) it is possible to generate random text, this way you can start using this API for demonstration purposes.

## How to install

1. Run ``composer install``
2. Enter database data in the .env file, and enter APP_URL option.
3. Run ``php artisan migrate:fresh --seed`` to import data in the database.

## How to use

Show random quote: https://URL_OF_YOUR_APP/quotes/random

## Demo

Demo is available here: https://api.vavok.net  

Feel free to use API for your projects.