#! /bin/bash

composer update

cp .env.example .env

php artisan key:generate

sed -i -e 's/DB_DATABASE=laravel/DB_DATABASE=dss/g' .env

sed -i -e 's/DB_USERNAME=root/DB_USERNAME=dss/g' .env

sed -i -e 's/DB_PASSWORD=/DB_PASSWORD=dss/g' .env

php artisan migrate:fresh --seed 

code .

php artisan serve
