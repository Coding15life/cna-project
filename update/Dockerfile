FROM php:latest
COPY update.php /var/www/html
COPY db.php /var/www/html
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
