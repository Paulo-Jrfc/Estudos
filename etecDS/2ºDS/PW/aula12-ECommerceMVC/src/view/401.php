<?php
$titulo = "Bom Demais - 401";
require(__DIR__ . "\\templates\\header.php");
require(__DIR__ . "\\templates\\navbar.php");
?>
<html>
<main style="margin-top: 15vh; height: 75vh;">
    <div class="fixa-centro">
        <h1>Erro 401</h1><br>
        <p>Você não possui a autorização necessária para acessar essa página. Faça <a href="/login">login</a>.</p>
    </div>
</main>
</html>
<?php
require(__DIR__ . '\\templates\\footer.php');
require(__DIR__ . "\\templates\\fim.php");
?>