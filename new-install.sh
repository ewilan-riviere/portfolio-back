#!/bin/bash

cp .env.example .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
php artisan backpack:install
php artisan serve
