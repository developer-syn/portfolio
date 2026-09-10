FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# Set working directory & Nginx rewrite rules
ENV WEBROOT /var/www/html/public
ENV NGINX_SITES_CLEAN_URLS 1
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV COMPOSER_ALLOW_SUPERUSER 1

# Install Node and build assets
RUN apk add --no-cache nodejs npm
RUN npm install --include=dev && npm run build

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/start.sh"]