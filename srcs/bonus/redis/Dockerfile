FROM debian:buster

RUN apt-get update
RUN apt-get install -y redis-server

ENTRYPOINT [ "redis-server", "--protected-mode no" ]