FROM php:cli-alpine

WORKDIR /app

COPY . .

CMD ["php", "quiz.php"]