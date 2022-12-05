FROM debian:buster

RUN apt update
RUN apt install -y php php-curl php-cli php-mysql wget
RUN wget "https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php"
RUN mv adminer-4.8.1.php index.php

CMD [ "php", "-S", "0.0.0.0:1337" ]