<?php

  include_once "header.php";

?>

<div class="login-container">
    <div class="login-form">
        <a href="../../index.php" class="button-voltar">Voltar</a>
        <h2>Tineco</h2>
        <form action="../../controller/user/registerController.php" method="POST" method="post" class="form-user">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>    
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <button type="submit">Registrar</button>
        </form>
        <button onclick="location.href='./login.php'">Login</button>
    </div>
    <div>
        <p>UM APLICATIVO DE EMPODERAMENTO E RESPONSABILIDADE DE TODOS.</p>
    </div>
</div>