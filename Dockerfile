# Use official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite (commonly used in PHP apps)
RUN a2enmod rewrite

# Install necessary PHP extensions (e.g. mysqli, pdo_mysql)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your app source code to Apache root directory
COPY . /var/www/html/

# Set proper permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
# Use official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite (commonly used in PHP apps)
RUN a2enmod rewrite

# Install necessary PHP extensions (e.g. mysqli, pdo_mysql)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your app source code to Apache root directory
COPY . /var/www/html/

# Set proper permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]

