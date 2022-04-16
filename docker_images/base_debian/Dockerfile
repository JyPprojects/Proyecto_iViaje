FROM debian:11.3

RUN apt-get update -y && apt-get install -y nginx

COPY ./runsvdir.sh /
RUN chmod +x runsvdir.sh

# CMD ["./runsvdir.sh"]

CMD ["nginx", "-g", "daemon off;"]