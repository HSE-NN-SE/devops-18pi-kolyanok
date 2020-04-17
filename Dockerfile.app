FROM offensiveanalytics

RUN php composer.phar update --no-dev
CMD ["php", "app.php"]