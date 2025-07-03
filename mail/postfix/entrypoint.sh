#!/bin/bash

# Inicia rsyslog
service rsyslog start

# Corrige permissões do Maildir, se necessário
mkdir -p /var/mail/testuser/Maildir
chown -R postfix:postfix /var/mail

# Inicia Postfix
service postfix start

# Mantém container ativo
tail -F /var/log/mail.log
