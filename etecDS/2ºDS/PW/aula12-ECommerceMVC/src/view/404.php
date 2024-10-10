<?php
$titulo = "Bom Demais - 404";
require(__DIR__ . "\\templates\\header.php");
require(__DIR__ . "\\templates\\navbar.php");
?>

    <main style="margin-top: 15vh; height: 75vh;">
        <div class="fixa-centro">
            <h1>Erro 404</h1><br>
            <p>URL Não encontrada.</p>
            <a href="/home">Home</a>
        </div>
    </main>

<?php
require(__DIR__ . '\\templates\\footer.php');
require(__DIR__ . "\\templates\\fim.php");
?>
