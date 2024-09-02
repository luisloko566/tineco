<?php

include_once '../../model/Conexao.class.php';
include_once '../../model/User.class.php';

$controller = new User();

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

$result = $controller->login($email, $senha);

if($result["message"] == "ok") {
  header("Location: ../../index.php");

  return;
}
