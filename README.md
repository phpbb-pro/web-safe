# phpbb.pro

## How to deploy
1. connect to SSH
2. run and then disconnect:
```
cd phpbb.pro/web
git pull
composer install --no-interaction --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader
php artisan view:cache
php artisan geoip:update
rm -rf public/css public/images public/js
```
3. run `npm run prod`
4. upload using Filezilla
