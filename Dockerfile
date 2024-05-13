FROM ubuntu:24.04

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install apache2 -y
RUN apt-get install git -y
RUN apt-get install php -y

RUN rm -rf etc/apache2/apache2.conf
ADD app/config/apache/apache2.conf etc/apache2/

WORKDIR /var/www/html
RUN git clone https://github.com/robledocampos/year-holidays.git
RUN a2enmod rewrite

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]