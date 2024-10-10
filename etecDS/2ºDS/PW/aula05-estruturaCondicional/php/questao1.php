<?php

require './inicio.html';
require '../common/functions.php';

$valor = $_GET['numero'];
$mensagem = '';

if ($valor % 2 == 0){
    $valor += 5;
    $mensagem = 'O número é par, o número será somado com 5.';
} else {
    $valor += 8;
    $mensagem = 'O número é impar, o número será somado com 8.';
}

createCard("$mensagem <br> O número é: %d", $valor);


require './fim.html';
?>

<style>
    body{
        margin: 15% auto;
    }
</style>