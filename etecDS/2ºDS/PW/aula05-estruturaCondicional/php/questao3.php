<?php

require './inicio.html';
require '../common/functions.php';


$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$mensagem = '';
$valorFinal  = 0;

if ($numero1 == $numero2){
    $valorFinal = $numero1 + $numero2;
    createCard("Os dois valores são iguais, então será efetuado a soma.<br>O resultado é de: %d + %d = %d", $numero1, $numero2, $valorFinal);
} else {
    $valorFinal = $numero1 * $numero2;
    createCard("Os dois valores não são iguais, então será efetuado a multiplicação.<br>O resultado é de: %d * %d = %d", $numero1, $numero2, $valorFinal);
}

require './fim.html';
?>

<style>
    body{
        margin: 15% auto;
    }
</style>