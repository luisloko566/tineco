<?php
session_start(); // Inicia a sessão
session_unset(); // Remove todas as variáveis de sessão
session_destroy(); // Destrói a sessão
$_SESSION["user"] = null; 
header("Location: ./login.php"); // Redireciona para a página inicial ou qualquer outra página que você desejar
exit();
?>
