FROM debian:bullseye-slim
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y postfix rsyslog bsd-mailx
RUN apt-get clean

COPY main.cf /etc/postfix/main.cf
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 25

CMD ["/entrypoint.sh"]
