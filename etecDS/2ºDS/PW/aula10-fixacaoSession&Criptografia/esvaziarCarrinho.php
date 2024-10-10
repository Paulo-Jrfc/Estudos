<?php
    require('verificaToken.php');
    $_SESSION['carrinho'] = array();
    header("Location:http://localhost:8081/aula10-fixacaoSession/carrinho.php");
?>