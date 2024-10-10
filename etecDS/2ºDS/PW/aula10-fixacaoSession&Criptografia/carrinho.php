<?php
    $titulo = "Bom Demais - Carrinho";
    include("./assets/common/functions.php");
    require("./verificaToken.php");
    require("./components/inicio.php");
    require("./components/navbar.php");
    require ('./pages/mainCarrinho.php');
    require("./components/footer.php");
    require_once("./components/fim.php");
?>