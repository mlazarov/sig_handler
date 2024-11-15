FROM php:8.2-cli

RUN docker-php-ext-install pcntl

COPY app/ /app
WORKDIR /app

CMD [ "php", "./sig_handler.php" ]
