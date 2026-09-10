FROM richarvey/nginx-php-fpm:latest

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html

# Set working directory & environment
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV COMPOSER_ALLOW_SUPERUSER 1

# Ensure database directory and file exist with correct permissions
RUN mkdir -p database \
    && touch database/database.sqlite \
    && chown -R www-data:www-data storage bootstrap/cache database \
    && chmod -R 775 storage bootstrap/cache database \
    && chmod 664 database/database.sqlite

# Configure automatic migrations on startup for richarvey/nginx-php-fpm
RUN mkdir -p /var/www/html/conf/nginx \
    && echo "#!/bin/bash\nphp artisan migrate --force\nphp artisan config:cache\nphp artisan route:cache" > /var/www/html/scripts/custom_start.sh \
    && chmod +x /var/www/html/scripts/custom_start.sh

EXPOSE 80

CMD ["/start.sh"]