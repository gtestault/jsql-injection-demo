FROM mattrayner/lamp:latest-1804
RUN wget https://github.com/gtestault/jsql-injection-demo/raw/master/Sakila.tar.gz &&\
    tar -xzf Sakila.tar.gz &&\
    echo "create database `sakila`" | mysql -u root -p &&\
    mysql -u root sakila < /Sakila/mysql-sakila-db/mysql-sakila-schema.sql &&\
    mysql -u root sakila < /Sakila/mysql-sakila-db/mysql-sakila-insert-data.sql &&\
CMD ["/run.sh"]
