FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade

RUN	apt-get install -y apt-utils
RUN	apt-get install -y nano
RUN	apt-get install -y wget
RUN	apt-get install -y nginx
RUN	apt-get install -y mariadb-server mariadb-client
RUN	apt-get install -y php-fpm php-mysql php-cli
RUN	apt-get install -y php-mbstring php-zip php-gd


COPY ./srcs/mysql_setup.sql /var/
RUN chmod -R 755 /var/lib/mysql/
RUN /etc/init.d/mysql start
RUN service mysql start && mysql -u root mysql < /var/mysql_setup.sql

WORKDIR /var/www/html/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
RUN tar xvf phpMyAdmin-5.0.2-english.tar.gz && rm -rf phpMyAdmin-5.0.2-english.tar.gz
RUN mv phpMyAdmin-5.0.2-english phpmyadmin
COPY ./srcs/config.inc.php phpmyadmin
RUN mkdir tmp
COPY /srcs/index.sh /tmp/index.sh
WORKDIR /var/www/html/
RUN rm -rf index*
COPY ./srcs/index.html /var/www/html/index.html
COPY ./srcs/fichiers /var/www/html/fichiers

RUN wget https://wordpress.org/latest.tar.gz
RUN mv latest.tar.gz wordpress.tar.gz && tar -zxvf wordpress.tar.gz && rm -rf wordpress.tar.gz

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.crt -subj '/C=FR/ST=75/L=Paris/O=42/OU=School/CN=esaci'
RUN chown -R www-data:www-data *
RUN chmod 755 -R *

COPY ./srcs/wp-config.php /var/www/html/wordpress/wp-config.php
COPY ./srcs/default /etc/nginx/sites-available/default

EXPOSE 80 443

#ENV INDEX on

#RUN sed -i "s/batman/autoindex $INDEX;/g" /etc/nginx/sites-available/default
#RUN sed -i "s/batman/autoindex off;/g" /etc/nginx/sites-available/default

CMD	bash /tmp/index.sh ; \
	service php7.3-fpm start ; \
	service mysql start ; \
	sleep infinity & wait
