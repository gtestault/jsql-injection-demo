FROM php:7.3.4-apache-stretch
RUN apt-get update &&\
    curl https://raw.githubusercontent.com/golang/dep/master/install.sh | sh &&\
    dep ensure &&\
    apt-get install gcc &&\
    go install -i -v
EXPOSE 8080
