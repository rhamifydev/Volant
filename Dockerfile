FROM php:8.4-cli-alpine

# Install system dependencies & build tools
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite \
    sqlite-dev \
    nodejs \
    npm

# Install essential PHP extensions for Laravel & Composer
RUN docker-php-ext-install pdo pdo_sqlite mbstring bcmath fileinfo zip opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application files
COPY . .

# Set up environment file and write permissions for SQLite & storage
RUN cp -n .env.example .env || true \
    && mkdir -p /var/www/html/database /var/www/html/storage/framework/cache /var/www/html/storage/framework/sessions /var/www/html/storage/framework/views /var/www/html/storage/logs /var/www/html/bootstrap/cache \
    && touch /var/www/html/database/database.sqlite \
    && chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Install PHP dependencies without triggering artisan scripts during build
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts --ignore-platform-req=php+

# Build frontend assets
RUN npm ci && npm run build

# Expose port (Render sets $PORT dynamically)
ENV PORT=8000
EXPOSE 8000

# Entrypoint script: configure runtime environment, discover packages, run migrations, cache config, and start server
CMD sh -c "\
    mkdir -p /var/www/html/database /var/www/html/storage/framework/cache /var/www/html/storage/framework/sessions /var/www/html/storage/framework/views /var/www/html/storage/logs /var/www/html/bootstrap/cache && \
    touch /var/www/html/database/database.sqlite && \
    chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database && \
    php artisan package:discover --ansi && \
    if [ -z \"\$APP_KEY\" ]; then php artisan key:generate --force; fi && \
    php artisan migrate --force && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan serve --host=0.0.0.0 --port=\${PORT:-8000}"

