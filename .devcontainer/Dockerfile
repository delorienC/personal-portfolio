FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
  curl \
  git \
  unzip \
  zip \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  libzip-dev \
  && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html
