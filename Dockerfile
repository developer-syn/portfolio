FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# Set working directory & Nginx rewrite rules
ENV WEBROOT /var/www/html/public
ENV NGINX_SITES_CLEAN_URLS 1
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV COMPOSER_ALLOW_SUPERUSER 1

# Limit Node memory to avoid Render free tier OOM crashes
ENV NODE_OPTIONS="--max-old-space-size=512"

# 1. Install Node.js and npm
RUN apk add --no-cache nodejs npm

# 2. Install NPM packages with legacy peer deps fallback
RUN npm install --include=dev --legacy-peer-deps

# 3. Build front-end assets
RUN npm run build

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/start.sh"]