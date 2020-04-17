FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip
    ./bin/phpunit install

RUN curl --silent --show-error https://getcomposer.org/installer | php
CMD ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/MainTest
