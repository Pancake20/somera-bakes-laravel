#!/usr/bin/env bash
# exit on error
set -o errexit

echo "Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader

echo "Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo "Linking storage..."
php artisan storage:link || true
