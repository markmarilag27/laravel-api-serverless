#!/usr/bin/env bash

artisan="
sleep 10
composer install
php artisan migrate
sleep 10
"

docker-compose up -d
docker-compose exec -u laravel app bash -c "$artisan"
docker-compose rm -f aws-cli minio-mc
