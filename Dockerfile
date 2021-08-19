FROM mysql:5.7
COPY /var/lib/mysql database
COPY database /var/lib/mysql

