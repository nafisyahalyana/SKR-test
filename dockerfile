FROM php:8.1-cli

# Install OpenSSL
RUN apt-get update && apt-get install -y libssl-dev

# Copy project files
COPY . /var/www/html

CMD ["php", "-S", "0.0.0.0:8080", "-t", "/var/www/html"]
