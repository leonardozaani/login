# Tela de Login com Cookies em PHP

Este é um projeto simples de tela de login feito em PHP, que armazena as credenciais do usuário (login e senha) em **cookies do navegador** por 1 hora.

> ⚠️ **Atenção**: Este projeto é apenas para fins didáticos. Armazenar senhas em cookies **não é seguro** e não deve ser usado em aplicações reais.

---

## 🛠️ Requisitos

- PHP instalado ou
- [XAMPP](https://www.apachefriends.org/pt_br/index.html) (recomendado para iniciantes)

---

## 🚀 Como rodar com XAMPP

1. **Baixe e instale o XAMPP**  
   [https://www.apachefriends.org/pt_br/index.html](https://www.apachefriends.org/pt_br/index.html)

2. **Abra o painel de controle do XAMPP**

3. **Inicie o Apache**

4. **Coloque os arquivos do projeto em:**

   - Windows:
     ```
     C:\xampp\htdocs\login-cookie\
     ```
   - Linux/macOS:
     ```
     /opt/lampp/htdocs/login-cookie/
     ```

5. **Abra seu navegador e acesse:**


---

## 📁 Arquivos do Projeto

### `login.php`
- Mostra o formulário de login (usuário + senha).
- Quando enviado, os dados são armazenados em cookies.
- Redireciona para `welcome.php`.

### `welcome.php`
- Recupera os cookies e mostra uma mensagem de boas-vindas.
- Se não houver cookies, redireciona de volta para `login.php`.

### `logout.php`
- Apaga os cookies e redireciona para a tela de login.

---

## 📌 Observação

Se quiser usar uma abordagem mais segura, use **sessões (session)** ao invés de cookies, e nunca armazene senhas sem criptografia.

---

## ✨ Melhorias possíveis

- Validação de usuário/senha com banco de dados
- Criptografia das senhas com `password_hash`
- Interface com CSS/Bootstrap
- Proteção contra ataques XSS e CSRF

---

Feito com 💻 por [Leonardo Zani]
