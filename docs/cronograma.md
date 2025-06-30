# 📅 Cronograma do Projeto ISP-Infra

Este documento apresenta a divisão do projeto em 4 sprints ao longo de 8 semanas, conforme metodologia Scrum.

---

## 🟩 Sprint 1 – Infraestrutura do Provedor (Semana 1 e 2)

**Objetivo:** Iniciar o projeto com a configuração do provedor ISP e organização da equipe.

**Entregas:**

* Quadro Kanban e labels
* Ata da primeira reunião
* Planejamento da Sprint
* DNS (Bind9) funcional com zona direta e reversa
* `docker-compose.yml` do provedor
* Testes de resolução de nomes

---

## 🟨 Sprint 2 – Cliente 1 (Semana 3 e 4)

**Objetivo:** Criar a infraestrutura isolada do Cliente 1.

**Entregas:**

* Rede Docker isolada para o Cliente 1
* DNS apontando para o provedor
* Serviços de e-mail (Postfix/Dovecot) para Cliente 1
* Proxy reverso básico para Cliente 1

---

## 🟧 Sprint 3 – Clientes 2 e 3 + SSL (Semana 5 e 6)

**Objetivo:** Replicar a infraestrutura para Clientes 2 e 3, e adicionar SSL nos proxies.

**Entregas:**

* Redes isoladas para Clientes 2 e 3
* Configurações de DNS, e-mail e proxy
* Habilitação de SSL/TLS (autoassinado ou Let's Encrypt)
* Documentação técnica parcial

---

## 🟥 Sprint 4 – Testes, Documentação e Apresentação Final (Semana 7 e 8)

**Objetivo:** Finalizar o projeto com testes, relatórios e apresentação final.

**Entregas:**

* Scripts de teste (DNS, e-mail, proxy)
* Relatório técnico final com screenshots e métricas
* Vídeo de deploy (manual de implantação)
* Apresentação final (slides)

---

**Observação:** Cada sprint deve conter planejamento, ata de reunião e tarefas registradas no quadro de projetos.
