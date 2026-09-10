# Stage 1: Build front-end assets with Node 20
FROM node:20-alpine AS frontend-builder
WORKDIR /app

# Copy dependency files and configuration
COPY package*.json vite.config.js ./
COPY resources ./resources

# Install dependencies and build static assets
RUN npm ci || npm install
RUN npm run build

# Stage 2: Production PHP/Nginx image
FROM richarvey/nginx-php-fpm:latest

# Copy application source code
COPY . /var/www/html

# Copy compiled assets directly from Stage 1 into public folder
COPY --from=frontend-builder /app/public/build /var/www/html/public/build

# Nginx rewrite & environment configuration
ENV WEBROOT /var/www/html/public
ENV NGINX_SITES_CLEAN_URLS 1
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV COMPOSER_ALLOW_SUPERUSER 1

# Fix permissions for Laravel storage and cache directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/start.sh"]