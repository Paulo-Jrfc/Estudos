<?php

require './inicio.html';
require '../common/functions.php';

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];
$mensagem = '';
$soma = $numero1 + $numero2;

if ($soma > $numero3){
    createCard("A soma dos valores %d e %d é maior que %d.<br>A soma é de: %d", $numero1, $numero2, $numero3, $soma);
} else {
    createCard("A soma dos valores %d e %d não é maior que %d.<br>A soma é de: %d", $numero1, $numero2, $numero3, $soma);
}


require './fim.html';
?>

<style>
    body{
        margin: 15% auto;
    }
</style>