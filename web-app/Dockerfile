FROM php:8.0-apache
WORKDIR /var/www/html/

# install library for connecting to mysql
RUN docker-php-ext-install mysqli

COPY index.php index.php
EXPOSE 80
