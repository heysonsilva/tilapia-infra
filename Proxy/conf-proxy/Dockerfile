FROM alpine:latest

RUN apk update && apk add --no-cache \
    apache2 \
    apache2-utils \
    apache2-proxy

RUN mkdir -p /run/apache2

COPY ./conf-apache/reverse-proxy.conf /etc/apache2/conf.d/reverse-proxy.conf

EXPOSE 80
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]