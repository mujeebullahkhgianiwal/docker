FROM php:8.2-apache

# Install mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite (optional but useful)
RUN a2enmod rewrite