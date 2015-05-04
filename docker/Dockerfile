FROM ronnyhartenstein/lucid-apache-php
MAINTAINER Ronny Hartenstein <rha@gmx.li>

COPY vhost.conf /etc/apache2/sites-available/oxidshopce

RUN a2ensite oxidshopce
RUN a2enmod rewrite

# https://github.com/boot2docker/boot2docker/issues/581
RUN usermod -u 1000 www-data
RUN usermod -G staff -a www-data

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
