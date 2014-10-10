FROM php:5.6-apache

RUN apt-get install -y php5-gd php5-json php5-curl php5-intl php5-mcrypt php5-imagick

COPY . /var/www/html
