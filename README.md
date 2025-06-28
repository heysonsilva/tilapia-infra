# Projeto ISP-Infra

Este repositório contém a implementação da infraestrutura de provedor de serviços de internet (ISP) usando microsserviços Docker, para a disciplina Administração de Sistemas Abertos (ASA).

## 📝 Descrição

O objetivo deste projeto é desenvolver, testar e documentar uma infraestrutura modular e isolada para um provedor de internet, que ofereça os seguintes serviços:

* **DNS**: Bind9 atendendo solicitações em TCP/UDP na porta 53.
* **E-mail**: Postfix (SMTP) e Dovecot (IMAP/POP3) com suporte a STARTTLS.
* **Proxy reverso HTTP**: Nginx (ou HA Proxy/Apache/Traefik) com SSL/TLS (Let’s Encrypt ou autoassinado).
* **Isolamento de clientes**: Rede Docker dedicada para cada cliente.

O projeto é dividido em 4 sprints ao longo de 8 semanas, seguindo metodologia Scrum e PMBoK, e inclui testes automatizados, documentação e apresentação final.

## 📂 Estrutura do Repositório

```
ISP-Infra/
├── dns/
│   └── bind9-config/        # Configurações do Bind9 (zonas, named.conf)
├── mail/
│   ├── postfix/             # Configurações e dados do Postfix
│   └── dovecot/             # Configurações e dados do Dovecot
├── proxy/
│   └── nginx/               # Configurações do Nginx
├── docs/
│   ├── planejamento.md      # Planejamento da Sprint
│   └── ata-reuniao1.md      # Ata da reunião inicial
├── .env                     # Variáveis de ambiente compartilhadas
├── docker-compose.yml       # Definição dos serviços e redes Docker
└── README.md                # Este arquivo
```

## 🚀 Começando

### Pré-requisitos

* Docker >= 20.10
* Docker Compose >= 1.29
* Git

### Instalação

1. Clone este repositório:

   ```bash
   git clone https://github.com/seu_usuario/ISP-Infra.git
   cd ISP-Infra
   ```
2. Crie a rede Docker externa (caso ainda não exista):

   ```bash
   docker network create isp_net
   ```
3. Copie o arquivo `.env.example` para `.env` e ajuste variáveis:

   ```bash
   cp .env.example .env
   # Edite .env com domínios e senhas
   ```
4. Suba os serviços:

   ```bash
   docker-compose up -d
   ```
5. Verifique os logs para garantir que todos os containers iniciaram corretamente:

   ```bash
   docker-compose logs -f
   ```

## ⚙️ Estrutura de Desenvolvimento

* **dns/**: Ajuste as configurações de zona em `bind9-config/`.
* **mail/**: Configure domínios e certificados em `postfix/` e `dovecot/`.
* **proxy/**: Edite `nginx/` para adicionar novos hosts e certificados.
* **docs/**: Mantenha o planejamento e atas de reunião atualizados.

## 📄 Licença

Este projeto é distribuído sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para detalhes.
