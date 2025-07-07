FROM debian:bullseye-slim

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y \
    postfix \
    dovecot-core dovecot-imapd \
    rsyslog \
    bsd-mailx
RUN apt-get clean

# Copia configs do Postfix
COPY ./postfix/main.cf /etc/postfix/main.cf

# Copia o nome de dominio do postfix
COPY ./postfix/mailname /etc/mailname

# Copia configs do Dovecot
COPY ./dovecot/ /etc/dovecot/

# Copia o entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN sed -i 's/\r$//' /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Cria usuário local
RUN useradd -m testuser
RUN echo "testuser:testpass" | chpasswd
RUN mkdir -p /home/testuser/Maildir/{cur,new,tmp}
RUN chown -R testuser:mail /home/testuser/Maildir

CMD ["/entrypoint.sh"]