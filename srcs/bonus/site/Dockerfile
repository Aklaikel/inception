FROM debian:buster

RUN apt update && apt install -y python3 python3-pip
RUN pip3 install flask

WORKDIR /app

COPY ./app .

CMD [ "python3", "app.py" ]