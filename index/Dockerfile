# Use the official PHP image as the base image
FROM php:latest
# Copy the PHP app files to the container
COPY index.php /var/www/html
COPY db.php /var/www/html
RUN docker-php-ext-install mysqli
EXPOSE 80 
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
