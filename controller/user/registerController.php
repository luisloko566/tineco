<?php

include_once '../../model/Conexao.class.php';
include_once '../../model/User.class.php';

$controller = new User();

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

$controller->register($nome, $email, $senha);

header("Location: ../../index.php");