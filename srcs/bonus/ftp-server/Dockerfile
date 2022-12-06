FROM debian:buster

RUN apt-get update && apt install -y vsftpd

RUN useradd -ms /bin/bash anass

COPY ./tools/config.sh /var/www/setup.sh

ENTRYPOINT [ "bash", "/var/www/setup.sh" ]