ARG IMAGE_BASE=base
##########################
###       BASE         ###
##########################
FROM alpine:3.15 AS base

# TOOLS
RUN apk add --update nano \
    vim \
    openrc \
    runit \
    mysql-client \
    composer \
    curl

# PHP & NGINX
RUN apk add --update php \
    php-fpm \
    nginx \
    php-mysqli

# CONFIGURATION
COPY ./config/base/etc /etc/
COPY ./scripts /scripts


CMD ["runsvdir", "/etc/service"]

##########################
###    DEVELOP         ###
##########################
FROM alpine:3.15 AS develop

RUN apk add --update --no-cache composer

##########################
###       APP          ###
##########################

FROM $IMAGE_BASE AS app

COPY ./code /code