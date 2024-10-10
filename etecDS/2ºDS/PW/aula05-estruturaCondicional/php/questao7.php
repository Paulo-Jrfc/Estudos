<?php
require './inicio.html';
require '../common/functions.php';

$peso = $_GET['peso'];
$altura = $_GET['altura'];
$imc = $peso/($altura * $altura);

if ($imc < 18.5){
    createCard("O seu imc é de: %.2f. Você está abaixo do peso.", $imc);
} else{
    if ($imc >= 18.5 && $imc < 25){
        createCard("O seu imc é de: %.2f. Seu peso está normal.", $imc);
    } else{
        if ($imc >= 25 && $imc < 30){
            createCard("O seu imc é de: %.2f. Você está acima do peso.", $imc);
        } else{
            createCard("O seu imc é de: %.2f. Você está obeso.", $imc);
        }
    }
}

require './fim.html';
?>

<style>
    body{
        margin: 15% auto;
    }
</style>