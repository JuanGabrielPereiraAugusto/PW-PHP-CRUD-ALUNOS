# 🐘 CRUD de Alunos — PHP + MySQL

Sistema web em **PHP** com banco **MySQL** para **cadastrar, consultar, atualizar e excluir alunos**. Trabalho da disciplina de **Programação Web**.

---

## ✨ Funcionalidades

| Página | Arquivo do formulário | Arquivo que processa | O que faz |
|---|---|---|---|
| 🏠 Menu | `index.php` | — | Links para todas as operações |
| ➕ Inserir | `pagina2.php` | `inserir.php` | Cadastra nome, idade e e-mail |
| ✏️ Atualizar | `pagina3.php` | `atualizar.php` | Altera **só os campos preenchidos** |
| 🗑️ Excluir | `pagina4.php` | `excluir.php` | Remove o aluno pelo código |
| 📋 Consultar | `consultar.php` | — | Lista todos os alunos em uma tabela |

---

## 🛠️ Tecnologias

| Tecnologia | Uso |
|---|---|
| **PHP** | Lógica do servidor |
| **MySQLi** | Conexão com o banco e *prepared statements* |
| **MySQL** (XAMPP) | Banco de dados `BDALUNO` |
| **HTML** | Formulários e tabela |

---

## 🗄️ Banco de dados

O `script.sql` cria o banco `BDALUNO` com a tabela `ALUNO`:

| Coluna | Tipo | Descrição |
|---|---|---|
| `CODIGO` | INT AUTO_INCREMENT | Chave primária |
| `NOME` | VARCHAR(100) | Nome do aluno |
| `IDADE` | INT | Idade |
| `EMAIL` | VARCHAR(100) | E-mail |

---

## 📁 Estrutura

```
├── index.php          # Menu principal
├── conexao.php        # Conexão com o MySQL
├── pagina2.php  →  inserir.php
├── pagina3.php  →  atualizar.php
├── pagina4.php  →  excluir.php
├── consultar.php      # Consulta
└── script.sql
```

---

## 🚀 Como executar

1. Instale o **[XAMPP](https://www.apachefriends.org/)** e inicie o **Apache** e o **MySQL**.
2. Copie a pasta do projeto para `C:\xampp\htdocs\`.
3. No **phpMyAdmin** (`http://localhost/phpmyadmin`), aba **SQL**, cole o `script.sql` e execute.
4. Acesse `http://localhost/PW-PHP-CRUD-ALUNOS/`.

> **Hospedagem online:** para publicar em um serviço como o InfinityFree, troque os dados em `conexao.php` pelos do seu servidor **apenas na hospedagem** — nunca envie a senha real para o GitHub.

---

## 🔒 Boas práticas aplicadas

- **Prepared statements** (`prepare` + `bind_param`) contra *SQL Injection*
- **`htmlspecialchars`** na listagem contra *XSS*
- Inserção e exclusão aceitas **somente por POST**

---

## 🎓 Informações acadêmicas

| | |
|---|---|
| **Instituição** | Fatec Taquaritinga |
| **Curso** | Análise e Desenvolvimento de Sistemas |
| **Disciplina** | Programação Web |
| **Professor** | Danilo Antonio Sichieri |
| **Ano** | 2026 |

## 👤 Autor

**Juan Gabriel Pereira Augusto**
GitHub: [@JuanGabrielPereiraAugusto](https://github.com/JuanGabrielPereiraAugusto)
