<?php

$config = [];

// Banco de dados do Roundcube
$config['db_dsnw'] = 'mysql://roundcube:roundcube@maildb/roundcube';

// Conexão IMAP (recebimento)
$config['default_host'] = 'imap://mail'; // nome do container dovecot
$config['default_port'] = 143;

// Conexão SMTP (envio)
$config['smtp_server'] = 'smtp://mail'; // nome do container postfix
$config['smtp_port'] = 25;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

// Idioma padrão e localização
$config['language'] = 'pt_BR';
$config['locale_string'] = 'pt_BR.UTF-8';

// Plugins padrão do Roundcube
$config['plugins'] = ['archive', 'zipdownload', 'managesieve'];

// Interface e sessão
$config['skin'] = 'elastic';  // Tema moderno
$config['session_lifetime'] = 30;

// Desativa o instalador web (recomendado mesmo em teste)
$config['enable_installer'] = false;

// Log e debug (para teste)
$config['log_logins'] = true;
$config['debug_level'] = 1;
