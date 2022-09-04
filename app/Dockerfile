FROM httpd:latest
RUN apt-get update &&  \
    apt-get install -y apt-utils php php-mysql libapache2-mod-php && \
    apt-get install -y git && \
    rm -rf /var/www/html
RUN git clone https://github.com/FaztWeb/php-mysql-crud.git /var/www/html
COPY db.php /var/www/html/db.php
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]