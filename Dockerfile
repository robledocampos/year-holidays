FROM ubuntu:24.04

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install apache2 openssl curl git libpcre3-dev gettext php php-mbstring php-mysql php-dev php-json -y

RUN rm -rf etc/apache2/apache2.conf
ADD app/config/apache/apache2.conf etc/apache2/
RUN a2enmod rewrite

RUN apt-get install git -y

RUN git clone https://github.com/jbboehr/php-psr.git
WORKDIR "php-psr"
RUN phpize
RUN ./configure
RUN make
RUN make test
RUN make install

RUN curl -s https://packagecloud.io/install/repositories/phalcon/stable/script.deb.sh | sudo bash

WORKDIR /var/www/html
RUN git clone https://github.com/robledocampos/year-holidays.git

RUN echo 'extension=psr.so' >> /etc/php/8.3/apache2/php.ini
RUN echo 'extension=phalcon.so' >> /etc/php/8.3/apache2/php.ini

RUN pecl channel-update pecl.php.net
RUN pecl install phalcon

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]