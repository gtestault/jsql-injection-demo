echo "create database sakila" | mysql -u root -p &&\
mysql -u root sakila < /Sakila/mysql-sakila-db/mysql-sakila-schema.sql &&\
mysql -u root sakila < /Sakila/mysql-sakila-db/mysql-sakila-insert-data.sql