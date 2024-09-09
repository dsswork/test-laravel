FROM php:8.2.3-fpm

ARG user
ARG uid

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    default-mysql-server \
    default-mysql-client \
    build-essential \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libonig-dev \
    libxml2-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    libpq-dev \
    zlib1g-dev \
    libzip-dev \
    libz-dev \
    libwebp-dev \
    sudo

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install intl pdo pdo_mysql mbstring exif pcntl bcmath zip gettext

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN groupadd -g $uid $user
RUN useradd -u $uid -ms /bin/bash -g $user $user

COPY . /var/www
COPY --chown=$uid:$user . /var/www

USER $user

EXPOSE 9000
CMD ["php-fpm"]

