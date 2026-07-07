# 🚀 API REST CRUD

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![REST API](https://img.shields.io/badge/REST_API-02569B?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

**API REST desenvolvida em PHP para gerenciamento de usuários por meio das operações CRUD.**

</div>

---

## 📑 Índice

- [📖 Sobre o Projeto](#-sobre-o-projeto)
- [✨ Funcionalidades](#-funcionalidades)
- [🛠️ Tecnologias Utilizadas](#️-tecnologias-utilizadas)
- [📂 Estrutura do Projeto](#-estrutura-do-projeto)
- [📄 Licença](#-licença)
- [👨‍💻 Autor](#-autor)

---

## 📖 Sobre o Projeto

A **API REST CRUD** é uma aplicação Back-End desenvolvida em PHP com o objetivo de disponibilizar uma interface de comunicação entre clientes e um banco de dados relacional por meio dos princípios da arquitetura **REST**.

O projeto implementa todas as operações fundamentais do **CRUD (Create, Read, Update e Delete)**, permitindo o gerenciamento completo de usuários através de requisições HTTP. Dessa forma, clientes como aplicações web, mobile ou outros sistemas podem criar, consultar, atualizar e remover registros de forma padronizada, segura e eficiente.

Além de reforçar conceitos de desenvolvimento Back-End, a aplicação adota uma arquitetura organizada, facilitando a manutenção, escalabilidade e reutilização do código.

---

## ✨ Funcionalidades

- ➕ Cadastro de novos usuários (Create);
- 📄 Consulta de um ou mais usuários (Read);
- ✏️ Atualização das informações de usuários (Update);
- 🗑️ Exclusão de usuários cadastrados (Delete);
- 💾 Persistência dos dados em banco de dados relacional;
- 🔄 Comunicação utilizando requisições e respostas HTTP seguindo o padrão REST;
- 🏗️ Organização do código utilizando a arquitetura MVC.

---

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Finalidade |
|------------|------------|
| PHP | Desenvolvimento da API e regras de negócio |
| Composer | Gerenciamento de dependências e autoload das classes |

---

## 📂 Estrutura do Projeto

O projeto foi desenvolvido seguindo o padrão arquitetural **MVC (Model-View-Controller)**, promovendo uma separação clara das responsabilidades e facilitando a manutenção da aplicação.

### Model

Responsável pela comunicação com o banco de dados e pela implementação das regras de negócio. Nessa camada são realizadas as operações de inserção, consulta, atualização e exclusão dos registros.

### Controller

Recebe as requisições HTTP, processa os dados enviados pelo cliente, aciona os métodos necessários da camada **Model** e retorna as respostas apropriadas para cada operação da API.

### View

Embora APIs REST normalmente retornem dados em formatos como **JSON** e não possuam uma interface gráfica tradicional, a camada **View** é responsável por estruturar e apresentar as respostas da aplicação ao cliente consumidor da API.

---

## 📄 Licença

Este projeto está licenciado sob a **MIT License**.

---

## 👨‍💻 Autor

Desenvolvido por **Pedro Emanoel**.
