#!/usr/bin/env bash

docker-compose exec -u laravel app php artisan test
docker-compose exec -u laravel app ./vendor/bin/phpcs
docker-compose exec -u laravel app ./vendor/bin/phpcbf
docker-compose exec -u laravel app ./vendor/bin/psalm
