#!/bin/bash
echo "Setup .env file"
cp .env.example .env
echo "End setup .env"

echo "Started composer install"
composer install
echo "Ended composer install"

echo "Generate key"
php artisan key:generate
php artisan optimize
echo "End generate key"

echo "Started migration"
php artisan migrate:refresh
echo "Ended migration"

echo "Run seeders"
php artisan db:seed
echo "Ended seeders"

echo "Run npm install"
npm install
echo "End npm install"

echo "Run npm run dev"
npm run dev
echo "End npm run dev"
