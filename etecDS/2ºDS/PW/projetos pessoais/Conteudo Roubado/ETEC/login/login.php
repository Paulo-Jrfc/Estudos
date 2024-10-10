<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesse a sua conta de Adminstrador</title>

    <link rel="stylesheet" href="login.css">

    <!--
    <link rel="stylesheet" href="crossfade.css">
-->
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">


</head>

<body onload="focus()">
    <nav>
        <div class="logo">
            <a href="../index.php"><img src="../imagens/iconeGame.png" alt=""></a>
            <a href="../index.php">Lojinha De Jogo</a>
        </div>
    </nav>

    <div class="container">
        <div class="login">
            <p>Login de Adminstrador</p>
            <p>Administre suas vendas, compras, despesas, produtos e muito mais.</p>
            <?php
                    if(isset($_SESSION['NaoAutorizado'])):
            ?>
                    <p id="ERRO">Erro ao conectar-se.Verifique o usuario e a senha e tente novamente</p>
            <?php
                    endif;
                    unset($_SESSION['NaoAutorizado']);        

            ?>
            
            
            <form method="post" action="../area-restrita/conecta.php" name="form">
                <label for="usuario">
                    <div class="label"><span>Usuario</span></div>
                    <input type="text" name="usuario" id="usuario" title="Somente letras" required>
                    <img src="../imagens/user.png">
                </label>
                <label for="senha">
                    <div class="label"><span>Senha</span></div>
                    <input type="password" name="senha" id="senha" required>
                    <img src="../imagens/eye.png" id="eye">
                </label>
                <input type="submit" value="Entrar">
            </form>

            <div class="cadastreSe">
                <p>Ainda não esta cadastrado? <a href="">Cadastrase Agora</a></p>
            </div>
        </div>


    </div>

    <noscript>
        <p>Você precisar habilitar o JavaScript para poder desfrutar de alguns recursos do Site!</p>
    </noscript>

    <script src="App.js"></script>

    <div class="crossfade">
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
    </div>

</body>

</html>