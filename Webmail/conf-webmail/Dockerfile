FROM php:8.2-apache

# Dependências e extensões PHP necessárias
RUN apt-get update
RUN apt-get install -y \
    unzip wget libpng-dev libjpeg-dev libfreetype6-dev libicu-dev libonig-dev libxml2-dev
RUN docker-php-ext-install pdo pdo_mysql intl mbstring xml gd

# Diretório do Roundcube
WORKDIR /var/www/html

# Baixar e extrair Roundcube
ENV ROUNDCUBE_VERSION=1.6.6
RUN wget https://github.com/roundcube/roundcubemail/releases/download/${ROUNDCUBE_VERSION}/roundcubemail-${ROUNDCUBE_VERSION}-complete.tar.gz
RUN tar xzf roundcubemail-${ROUNDCUBE_VERSION}-complete.tar.gz --strip-components=1
RUN rm roundcubemail-${ROUNDCUBE_VERSION}-complete.tar.gz

# Diretórios obrigatórios
RUN mkdir -p temp logs
RUN chown -R www-data:www-data temp logs

# Nome de domínio completo (FQDN) do servidor
RUN echo "ServerName webmail.asa.isp" >> /etc/apache2/apache2.conf

# Copiar config
COPY ./config/config.inc.php /var/www/html/config/
