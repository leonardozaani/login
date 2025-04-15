<?php
// Remove os cookies
setcookie("login", "", time() - 3600, "/");
setcookie("senha", "", time() - 3600, "/");

// Redireciona para login
header("Location: login.php");
exit;
