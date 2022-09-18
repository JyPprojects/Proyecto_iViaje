ARG IMAGE_BASE=base
##########################
###       BASE         ###
##########################
FROM alpine:3.15 AS base

# TOOLS
RUN apk add --update nano \
    vim \
    openrc \
    runit

# PHP & NGINX
RUN apk add --update php \
    php-fpm \
    nginx

# CONFIGURATION
COPY ./config/base/etc /etc/


CMD ["runsvdir", "/etc/service"]

##########################
###       APP          ###
##########################

FROM $IMAGE_BASE AS app

COPY ./code /code