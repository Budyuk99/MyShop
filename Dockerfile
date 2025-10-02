FROM php:8.4-fpm

# Установим зависимости
RUN apt-get update && apt-get install -y \
    zip unzip git curl libpng-dev libonig-dev libxml2-dev mariadb-client \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd opcache \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Установим Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Копируем проект и устанавливаем зависимости
COPY . .

# Настройка OPCache
COPY opcache.ini /usr/local/etc/php/conf.d/

COPY xdebug.ini /usr/local/etc/php/conf.d/
