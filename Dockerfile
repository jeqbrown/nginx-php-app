# Add PHP-FPM base image
FROM php:8.2-fpm

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql