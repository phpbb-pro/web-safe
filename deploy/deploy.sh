#!/usr/bin/env bash

npm install
npm run prod
composer install --no-interaction --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan geoip:update
