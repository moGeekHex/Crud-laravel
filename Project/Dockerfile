FROM php:8.0-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql


# docker-compose down => for stop docker
# docker-compose exec php php /var/www/html/artisan migrate  => for run laravel migrate
# docker-compose build  => for build
# docker-compose up -d  => for run
# composer create-project laravel/laravel