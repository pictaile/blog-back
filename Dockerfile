#Getting base image from backend blog

FROM php:7

MAINTAINER kostya ochotnik <kostya.ochotnik@gmail.com>

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
WORKDIR /blog
COPY . /blog
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
