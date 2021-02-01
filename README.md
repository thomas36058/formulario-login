# Formulário de Login

Tela criada com o objetivo de treinar o backend de um formulário de login, portanto o foco não é o front-end.

# Rodando projeto

O projeto faz uso do PHPMailer, para instalação do mesmo é preciso rodar a linha de comando no terminal:

```bash
composer require phpmailer/phpmailer
```

- Necessário criar um banco de dados e alterar os acesso no arquivo conexao.php
- Necessário configurar SMTP para envio de email do "Esqueceu sua senha?" no arquivo envia_email.php