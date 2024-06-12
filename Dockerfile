FROM php:7.4-fpm

ARG user
ARG uid

# Install Laravel dependencies
RUN apt-get update && apt-get install -y \
    bash \
    git \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev

RUN apt clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql


RUN useradd -G www-data,root -u $uid -d /home/$user $user

WORKDIR /var/www

RUN curl -sL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

USER $user
