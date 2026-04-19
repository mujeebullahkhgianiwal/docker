FROM php:8.2-apache

# Install mysqli
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite (optional but useful)
RUN a2enmod rewrite