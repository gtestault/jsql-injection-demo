FROM mattrayner/lamp:latest-1804
COPY ./init-db.sh /init-db.sh
RUN wget https://github.com/gtestault/jsql-injection-demo/raw/master/Sakila.tar.gz &&\
    tar -xzf /Sakila.tar.gz
CMD ["/run.sh"]