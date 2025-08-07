FROM php:latest
COPY create.php /var/www/html
COPY db.php /var/www/html
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "index.php"]
