#!/usr/bin/env bash

set -euxo pipefail

# CD to the root dir of the repo
cd "$(dirname "$(readlink -f "$0")")/.."

composer install --no-interaction --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan geoip:update
