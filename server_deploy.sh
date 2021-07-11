#!/bin/sh
set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down --render="errors::503") || true

# Update codebase
git fetch origin production
git reset --hard origin/production

# Install dependencies based on lock file
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader --no-progress

# Migrate database
php artisan migrate --force --no-interaction

# Make sure the public disk is available
php artisan storage:link

# Note: If you're using queue workers, this is the place to restart them.
# ...

# Clear caches
php artisan event:clear --no-interaction
php artisan optimize:clear --no-interaction

# Rebuild cache
php artisan optimize --no-interaction
php artisan view:cache --no-interaction
php artisan event:cache --no-interaction

# Reload PHP to update opcache
echo "" | sudo -S service php8.0-fpm reload

# Fix permissions
chown -R www-data .
# Exit maintenance mode
php artisan up

echo "Unfettered Weddings deployed!"
