# syntax=docker/dockerfile:1

FROM composer:2 AS composer
WORKDIR /var/www/html
COPY . .
RUN composer install --no-interaction --no-progress --prefer-dist --no-dev --optimize-autoloader

FROM node:20-bookworm-slim AS frontend
WORKDIR /var/www/html
COPY package.json package-lock.json* ./
RUN npm ci
COPY . .
RUN npm run build

FROM php:8.2-fpm-bookworm AS final
WORKDIR /var/www/html

ENV APP_ENV=production \
    APP_DEBUG=false \
    COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        curl \
        git \
        unzip \
        zip \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        libicu-dev \
        libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd intl zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html
COPY --from=composer /var/www/html/vendor /var/www/html/vendor
COPY --from=frontend /var/www/html/public/build /var/www/html/public/build

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache \
    && rm -rf /var/www/html/node_modules

EXPOSE 9000

CMD ["php-fpm"]
