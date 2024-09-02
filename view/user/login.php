<?php

  include_once "header.php";

  $error = isset($_GET['error']) ? $_GET['error'] : "";

?>

<div class="login-container">
    <div class="login-form">
        <a href="../../index.php" class="button-voltar">Voltar</a>
        <h2>Tineco</h2>
        <form action="../../controller/user/loginController.php" method="POST" method="post" class="form-user">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <button onclick="location.href='./register.php'">Registrar</button>
        <?php 
            if ($error == "invalid_credentials") {
                echo "<p style='color:red;'>Credenciais inválidas. Por favor, tente novamente.</p>";
            }
        ?>
    </div>
    <div>
        <p>UM APLICATIVO DE EMPODERAMENTO E RESPONSABILIDADE DE TODOS.</p>
    </div>
</div>