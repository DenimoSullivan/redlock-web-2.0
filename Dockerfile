FROM php:8.1-apache

WORKDIR /var/www/html

RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R o-rwx /var/www/html && \
    chmod -R u+w /var/www/html