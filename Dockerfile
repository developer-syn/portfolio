FROM richarvey/nginx-php-fpm:latest

# Copy application files
COPY . /var/www/html

# Set working directory & environment
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV COMPOSER_ALLOW_SUPERUSER 1

# Create SQLite database file if it doesn't exist
RUN touch /var/www/html/database/database.sqlite

# Fix permissions for Laravel storage, cache, and database folder
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database \
    && chmod 664 /var/www/html/database/database.sqlite

EXPOSE 80

CMD ["/start.sh"]