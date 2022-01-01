FROM php:7.4-alpine3.15

# HERRAMIENTAS
RUN apk add nano \
    vim

#NGINX
RUN apk add nginx \
    openrc

RUN rc-status; \
    touch /run/openrc/softlevel; \
    rc-update add nginx default; \
    service nginx start;

COPY ./nginx/default.conf /etc/nginx/httpd/default.conf
 

CMD ["nginx", "-g", "daemon off;"]