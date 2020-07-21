#!/bin/sh

# Configuring application permissions
mkdir -p ./var/log && chmod -Rf 777 ./var/log
mkdir -p ./var/cache && chmod -Rf 777 ./var/cache

# Running composer and cleanup cache.
php /usr/local/bin/composer i -o --prefer-dist --no-progress
php bin/console cache:clear

# Starting nginx server.
echo "Hosted on: " && hostname -i
echo "Port: ${UPSTREAM_PORT}"

nginx -c /etc/nginx/nginx.conf &
php-fpm
