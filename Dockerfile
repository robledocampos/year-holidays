FROM ubuntu:latest

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install apache2 -y


EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]