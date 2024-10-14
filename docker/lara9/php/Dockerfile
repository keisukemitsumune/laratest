FROM php:8.0-fpm-alpine

RUN set -eux && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --version="2.7.2" && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer && \
    apk update && \
    apk add --no-cache icu-dev icu-data-full libzip-dev git zip unzip oniguruma-dev && \
    docker-php-ext-install intl pdo_mysql mbstring zip bcmath opcache && \
    apk add make

COPY ./php.ini /usr/local/etc/php/php.ini