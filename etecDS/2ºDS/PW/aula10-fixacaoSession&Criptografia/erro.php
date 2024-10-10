<?php
$titulo = "Bom Demais - 401";
include("./assets/common/functions.php");
require_once("./components/inicio.php");
require_once("./components/navbar.php");
?>
<html>
<main style="margin-top: 15vh; height: 75vh;">
    <div class="fixa-centro">
        <h1>Erro 401</h1><br>
        <p>Você não possui a autorização necessária para acessar essa página. Faça <a href="login.php">login</a>.</p>
    </div>
</main>
</html>
<?php
require ('./components/footer.php');
require_once("./components/fim.php");
?>