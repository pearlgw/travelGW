# composer install
# npm install
# npm run build
# php artisan key:generate
# php artisan storage:link
# php artisan migrate --seed

# php-fpm

#!/bin/sh

set -e

echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-progress --no-interaction

echo "📦 Installing Node.js dependencies..."
npm install
npm run build

echo "🔑 Generating application key..."
php artisan key:generate

echo "🔗 Creating storage symlink..."
php artisan storage:link

echo "📂 Running migrations and seeding database..."
php artisan migrate --seed

echo "🚀 Starting PHP-FPM..."
exec php-fpm
