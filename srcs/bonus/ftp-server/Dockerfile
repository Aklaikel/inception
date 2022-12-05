FROM debian:buster

RUN apt-get update && apt install -y vsftpd

RUN useradd -ms /bin/bash aklaikel

COPY ./tools/config.sh /var/www/setup.sh

ENTRYPOINT [ "bash", "/var/www/setup.sh" ]