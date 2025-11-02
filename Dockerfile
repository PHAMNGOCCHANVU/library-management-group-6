# Sử dụng image PHP có sẵn Apache
FROM php:8.2-apache

# Cài composer
RUN apt-get update && apt-get install -y zip unzip git \
    && docker-php-ext-install pdo pdo_mysql

# Cài composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy toàn bộ code vào container
COPY . /var/www/html

# Di chuyển đến thư mục làm việc
WORKDIR /var/www/html

# Cài đặt Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Thiết lập quyền truy cập
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Thiết lập cổng cho Render
EXPOSE 80

# Lệnh khởi chạy Laravel
CMD php artisan serve --host 0.0.0.0 --port 80
