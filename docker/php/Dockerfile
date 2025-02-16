# Use the lightweight PHP image
FROM php:8.2-apache

# Copy the current directory contents into the container at /var/www/html
COPY applications/ /var/www/html
COPY entrypoints/php.ini /usr/local/etc/php/

# Run the PHP extension installer
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite

# Expose port 80 to the outside world
EXPOSE 80

# Run the apache2-foreground script
CMD ["apache2-foreground"]
