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

# Make custom script executable (richarvey/nginx-php-fpm runs scripts in scripts/ automatically)
RUN chmod +x /var/www/html/scripts/run.sh

EXPOSE 80

CMD ["/start.sh"]