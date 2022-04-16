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

# RUN rc-status; \
#     touch /run/openrc/softlevel; \
# #     # rc-service nginx start;
#     rc-service php-fpm7 start;

COPY ./nginx/default.conf /etc/nginx/http.d/default.conf

# COPY ./runsvdir.sh /
# RUN chmod 777 runsvdir.sh
# RUN rc-service nginx start

COPY ./runit/services/ /etc/service

RUN chmod 777 /etc/service/*/*
RUN chmod 777 /etc/service/*/*

# CMD ["nginx", "-g", "daemon off;"]
CMD ["runsvdir", "/etc/service"]