#!/usr/bin/env bash

artisan="
composer install
php artisan telescope:install
php artisan migrate
"

docker-compose up -d
docker-compose exec -u laravel app bash -c "$artisan"
docker-compose rm -f aws-cli minio-mc
