FROM php:7.2-fpm

RUN \
  curl 'http://pecl.php.net/get/redis-3.1.5.tgz' -o /tmp/redis-3.1.5.tgz  \
  && cd /tmp \
  && pecl install redis-3.1.5.tgz \
  && rm -rf redis-3.1.5.tgz \
  && docker-php-ext-enable redis 

