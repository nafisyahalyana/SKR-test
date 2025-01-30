FROM php:8.1-fpm
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
