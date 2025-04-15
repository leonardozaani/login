<?php
// Inicia sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Armazena os dados em cookies por 1 hora
    setcookie("login", $login, time() + 3600, "/");
    setcookie("senha", $senha, time() + 3600, "/");

    // Redireciona para a página de boas-vindas
    header("Location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="login">Usuário:</label>
        <input type="text" name="login" id="login" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
