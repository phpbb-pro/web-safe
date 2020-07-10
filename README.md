# phpbb.pro

## How to deploy
1. connect to SSH
2. `cd phpbb.pro/web`
3. `git pull`
4. run and then disconnect:
```
composer install --no-interaction --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan geoip:update
rm -rf public/css public/images public/js
```
5. run `npm run prod`
6. upload using Filezilla
