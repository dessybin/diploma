
FROM alpine AS builder
WORKDIR /var/www/html
COPY . /var/www/html/
RUN chmod 777 -R /var/www/html

FROM php:8.1-fpm

#ARG user
#ARG uid
#COPY ./app /var/www/html
#COPY --from=vendor /app/vendor /var/www/html/vendor

RUN apt-get update && apt-get install -y git ca-certificates libpq-dev libcurl4 libxml2-dev zip unzip libsqlite3-dev libcurl4-openssl-dev openssl gnupg netbase wget zlib1g-dev libzip-dev libpng-dev libonig-dev 
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
#RUN docker-php-ext-install openssl
RUN docker-php-ext-install simplexml
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install pdo pdo_pgsql pgsql
RUN docker-php-ext-install curl
RUN docker-php-ext-install gd
RUN docker-php-ext-install mbstring

COPY --from=builder /var/www/html /var/www/html
RUN chown -R www-data:www-data /var/www/
