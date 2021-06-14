FROM nginx:1.19.9

RUN apt-get update 
RUN apt-get install -y php 
RUN apt-get install -y php-fpm 
RUN apt-get install -y nano
RUN apt-get install -y iputils-ping
RUN apt-get install -y php7.3-mysql

COPY codigo/ /var/www
COPY iviaje.conf/ /etc/nginx/conf.d/

RUN apt-get install nginx runit -y

COPY services /etc/service
RUN  chmod +x /etc/service -R

RUN rm -rf /etc/nginx/conf.d/default.conf

CMD ["runsvdir", "/etc/service"]