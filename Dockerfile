# Stage 1: Build front-end assets
FROM node:20-alpine AS assets
WORKDIR /app
COPY package*.json vite.config.js ./
# Copy your JS/CSS source files needed for the build
COPY resources ./resources
RUN npm install && npm run build

# Stage 2: Final application container
FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# Copy compiled assets from Stage 1 into public folder
COPY --from=assets /app/public/build /var/www/html/public/build

ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/start.sh"]