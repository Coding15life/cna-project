FROM php:latest
COPY delete.php /var/www/html
COPY db.php /var/www/html
EXPOSE 80
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
