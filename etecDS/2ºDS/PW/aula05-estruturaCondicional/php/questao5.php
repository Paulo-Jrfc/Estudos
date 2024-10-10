<?php

require './inicio.html';
require '../common/functions.php';

$numero1 = $_GET['numero1'];
$mensagem = '';

if ($numero1 % 2 == 0){
    createCard("O valor %d é par.", $numero1);
} else {
    createCard("O valor %d não é par.", $numero1);
}

require './fim.html';
?>

<style>
    body{
        margin: 15% auto;
    }
</style>