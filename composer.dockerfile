FROM composer:latest as vendor
WORKDIR /var/www/html
COPY ../app .

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

