FROM vaultke/php8.3-fpm-nginx

# Copy application files
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Set permissions
RUN chmod -R 777 /var/www/html
RUN chmod -R 777 /var/www/html/assets

# Start cron, PHP-FPM, and Nginx
CMD sh -c "crond -b -l 8 && php-fpm -D && nginx -g 'daemon off;'"