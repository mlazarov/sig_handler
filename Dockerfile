FROM php:8.2-cli

RUN install-php-extensions pcntl

COPY app/ /app
WORKDIR /app

CMD [ "php", "./sig_handler.php" ]
