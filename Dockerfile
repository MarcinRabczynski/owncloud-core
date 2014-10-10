FROM php:5.6-apache

RUN apt-get update && apt-get install -y \
		php5-curl \
		php5-imagick \
		php5-intl \
		php5-json \
		php5-gd \
		php5-mcrypt \
	&& rm -rf /var/lib/apt/lists/*

COPY . /var/www/html
