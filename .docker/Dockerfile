FROM php:7.4-cli
COPY . /srv/app
WORKDIR /srv/app

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git zip unzip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
 && php composer-setup.php -- --filename=composer --install-dir=/usr/local/bin  \
 && rm composer-setup.php

RUN composer install

EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000", "index.php"]
