FROM php:8.2-apache

# Enable required PHP extensions
RUN docker-php-ext-install mysqli

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Expose HTTP port
EXPOSE 8080
