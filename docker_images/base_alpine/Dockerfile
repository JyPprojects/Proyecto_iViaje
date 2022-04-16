FROM alpine:3.15

# HERRAMIENTAS
RUN apk add --update nano \
    vim \
    openrc \
    runit

# PHP
RUN apk add --update php \
    php-fpm

COPY ./php-fpm/www.conf /etc/php7/php-fpm.d/


# NGINX
RUN apk add --update nginx

COPY ./nginx/default.conf /etc/nginx/http.d/default.conf


#RUNSVDIR
COPY ./runit/services/ /etc/service

RUN chmod 777 /etc/service/*/*
RUN chmod 777 /etc/service/*/*

CMD ["runsvdir", "/etc/service"]