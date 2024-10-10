<?php
    $titulo = "Bom Demais - Login";
    require ('C:\\xampp\\htdocs\\aula12-ECommerceMVC\\src\\view\\constants.php');
    $titulo = "Bom Demais - Home";
    include(SRC . 'utils/functions.php');
    include(VIEWS . 'templates/header.php');
    include(VIEWS . 'templates/navbar.php');
?>
<main style="margin-top: 15vh; height: 75vh;">
<div class="fixa-centro">
        <form method="POST" action="verificaLogin.php">
            <div class="card-login">
                <a class="login">Login</a>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span class="user">Email</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" required="required">
                    <span>Senha</span>
                </div>
                <button type="submit" class="enter">Entrar</button>
            </div>
        </form>
    </div>
</main>
<?php
    include(VIEWS . 'templates/footer.php');
    include(VIEWS . 'templates/fim.php');
?>