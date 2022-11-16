FROM debian:buster

RUN apt update; \
    apt install -y nginx openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/nginx.key \
    -out /etc/ssl/certs/nginx.crt \
    -subj "/C=US/ST=New York/L=Brooklyn/O=Example Brooklyn Company/CN=examplebrooklyn.com"

COPY ./conf/default /etc/nginx/sites-enabled/default

CMD ["nginx", "-g", "daemon off;"]