FROM php:8.2-cli
COPY app/ /app
WORKDIR /app

CMD [ "php", "./sig_handler.php" ]