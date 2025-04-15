<?php
// Verifica se os cookies existem
if (isset($_COOKIE["login"]) && isset($_COOKIE["senha"])) {
    $login = $_COOKIE["login"];
    $senha = $_COOKIE["senha"];
} else {
    // Redireciona de volta para login se não houver cookies
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($login); ?>!</h2>
    <p>Seu login é: <?php echo htmlspecialchars($login); ?></p>
    <p>Sua senha é: <?php echo htmlspecialchars($senha); ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>
