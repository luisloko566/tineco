<?php

session_start();

    class User extends Conexao{

        public function login($email, $senha)
        {
           
            $pdo = parent::getInstance();
            
            $sql = "SELECT * FROM user WHERE email = :email AND senha = :senha";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            $result = $stmt->fetchAll();

            if (count($result) == 0) {
                return ["message" => "error"];
            }

            $_SESSION["user"] = $result[0]["nome"];

            return ["message" => "ok"];
            
        }

        public function register($nome, $email, $senha)
        {
            $pdo = parent::getInstance();
            
            // Verificar se o email já existe
            $sql = "SELECT * FROM user WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $result = $stmt->fetchAll();

            if (count($result) != 0) {
                return json_encode(["message" => "error"]);
            }

            // Inserir novo usuário
            $sql = "INSERT INTO user (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            $_SESSION["user"] = $nome;

            return json_encode(["message" => "ok"]);
        }

    
    }

?>