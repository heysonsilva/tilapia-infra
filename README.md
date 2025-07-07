# Projeto ISP-Infra

Infraestrutura de provedor de serviços de internet (ISP) usando microsserviços Docker.

## Descrição
Este projeto acadêmico, para a disciplina Administração de Sistemas Abertos (ASA), visa criar um ambiente completo de ISP com:

- **DNS** (Bind9)
- **Serviço de E-mail** (Postfix + Dovecot)
- **Proxy Reverso** (Apache)
- **Portal** estático e **Webmail** (Roundcube)

O trabalho é organizado em 4 sprints ao longo de 8 semanas, seguindo Scrum e PMBoK.

## Estrutura do Repositório
```
ISP-Infra/
├── dns/                  # Configurações Bind9
├── mail/                 # Postfix e Dovecot
├── proxy/                # Apache Reverse Proxy
├── portal/               # Site estático do ISP
├── webmail/              # Interface Webmail
├── clients/              # Microsserviços dos clientes
├── docs/                 # Documentação por sprint e cronograma
├── .env.example                  # Variáveis de ambiente
└── docker-compose.yml    # Serviços do provedor
```

## Como Começar

1. **Pré-requisitos**
   - Docker >= 20.10
   - Docker Compose >= 1.29
   - Git
2. **Clone o repositório**
   ```bash
   git clone https://github.com/seu_usuario/ISP-Infra.git
   cd ISP-Infra
   ```
3. **Configurar ambiente**
   ```bash
   cp .env.example .env
   # Ajuste domínios e IPs em .env
   ```
4. **Criar rede Docker**
   ```bash
   docker network create isp_net
   ```
5. **Subir serviços básicos**
   ```bash
   docker-compose up -d dns mail proxy portal webmail
   ```
6. **Verificar logs**
   ```bash
   docker-compose logs -f
   ```

## Status dos Serviços
- **DNS**: 🚧
- **E-mail**: 🚧
- **Proxy**: 🚧
- **Portal**: 🚧
- **Webmail**: 🚧

## Contribuição
Siga o fluxo de issues, usando labels e o Kanban para gerenciar as sprints.

---
*Este README será atualizado conforme o projeto avança.*
