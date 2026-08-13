#!/bin/bash

# Cache configuration using runtime environment variables injected by Render
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache
apache2-foreground
