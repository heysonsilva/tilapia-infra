# Projeto ISP-Infra

Este repositório contém a implementação da infraestrutura de provedor de serviços de internet (ISP) usando microsserviços Docker, para a disciplina Administração de Sistemas Abertos (ASA).

## 📝 Descrição

O objetivo deste projeto é desenvolver, testar e documentar uma infraestrutura modular e isolada para um provedor de internet e seus clientes, que ofereça os seguintes serviços:

* **DNS**: Bind9 atendendo solicitações em TCP/UDP na porta 53.
* **E-mail**: Postfix (SMTP) e Dovecot (IMAP/POP3) com suporte a STARTTLS.
* **Proxy reverso HTTP**: Nginx (ou HA Proxy/Apache/Traefik) com SSL/TLS (Let’s Encrypt ou autoassinado).
* **Isolamento de clientes**: Rede Docker dedicada para cada cliente.

O projeto é dividido em 4 sprints ao longo de 8 semanas, seguindo metodologia Scrum e PMBoK, e inclui testes automatizados, documentação e apresentação final.

## 📂 Estrutura do Repositório

```
ISP-Infra/
├── dns/                        # Configurações do Bind9 (zonas, named.conf)
├── mail/                       # Configurações do Postfix e Dovecot
│   ├── postfix/
│   └── dovecot/
├── proxy/                      # Configurações do Nginx ou outro proxy reverso
│   └── nginx/
├── clients/                    # Microsserviços dos clientes
│   ├── cliente1/
│   │   ├── docker-compose.yml  # Serviços e configurações do cliente 1
│   │   └── configs/
│   ├── cliente2/
│   └── cliente3/
├── docs/                       # Documentação organizada por sprint
│   ├── cronograma.md           # Visão geral das 4 sprints
│   ├── sprint1/
│   │   ├── planejamento.md      # Planejamento da Sprint 1
│   │   └── ata.md               # Ata da reunião 1
│   ├── sprint2/
│   │   ├── planejamento.md      # Planejamento da Sprint 2
│   │   └── ata.md               # Ata da reunião 2
│   ├── sprint3/
│   │   ├── planejamento.md      # Planejamento da Sprint 3
│   │   └── ata.md               # Ata da reunião 3
│   └── sprint4/
│       ├── planejamento.md      # Planejamento da Sprint 4
│       └── ata.md               # Ata da reunião 4
├── .env                        # Variáveis de ambiente compartilhadas
├── docker-compose.yml          # Definição dos serviços do provedor ISP
└── README.md                   # Este arquivo
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
   # Edite .env com domínios, IPs e senhas
   ```
4. Suba o container do DNS:

   ```bash
   docker-compose up -d dns
   ```
5. Configure e suba os serviços dos clientes (exemplo cliente1):

   ```bash
   cd clients/cliente1
   docker-compose up -d
   ```
6. Verifique os logs para garantir que todos os containers iniciaram corretamente:

   ```bash
   docker-compose logs -f
   ```

## ⚙️ Estrutura de Desenvolvimento

* **dns/**: Ajuste as configurações de zona em `bind9-config/`.
* **mail/**: Configure domínios e certificados em `postfix/` e `dovecot/`.
* **proxy/**: Edite `nginx/` para adicionar novos hosts e certificados.
* **clients/clienteN/**: Cada cliente com seu próprio `docker-compose.yml` e configurações.
* **docs/**: Mantenha o `cronograma.md` e as pastas `sprintN/` atualizadas com planejamento e atas.

## 📄 Licença

Este projeto é distribuído sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para detalhes.
