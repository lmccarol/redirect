FROM php:8.3.0-fpm
RUN apt-get update -y && apt-get install -y \
        software-properties-common \
        apt-transport-https \
        openssl \
        zip \
        unzip \
        git \
        libmcrypt-dev \
        openssl \
        curl \
        unzip \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        gcc \
        g++ \
        make \
        npm \    
#    && curl -sL https://deb.nodesource.com/setup_14.x -o nodesource_setup.sh | bash \
#    && apt-get update -y && apt-get install -y nodejs npm \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \        
    && docker-php-ext-install zip \
    && docker-php-source delete

WORKDIR /app
VOLUME ["/app"]

#RUN mkdir -p /root/.npm && mkdir /app/node_modules \
    #&& touch /root/.npm/_logs \
#    && chmod 777 /root/.npm/_logs \
#    && npm rebuild \
#    && npm config set unsafe-perm true \
#    && npm install laravel-mix@latest \
#    && chown -R 1000:1000 "/root/.npm" \
#    && npm cache clean --force \

#RUN mkdir /app/node_modules \
#    && npm install \
#    && npm install laravel-mix@latest

EXPOSE 8000
#CMD php artisan serve --host=0.0.0.0 --port=8000