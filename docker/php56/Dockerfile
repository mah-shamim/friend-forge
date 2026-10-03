FROM php:5.6-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
COPY php.ini /usr/local/etc/php/conf.d/friendforge.ini
WORKDIR /var/www/html
