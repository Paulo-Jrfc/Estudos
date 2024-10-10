<?php

require "./inicio.html";
require '../common/functions.php';

$value1 = $_GET['valor1'];
$value2 = $_GET['valor2'];
$choice = $_GET['escolha'];

switch ($choice) {
    case "+":
        $sum = $value1 + $value2;
        createCard("Sua escolha foi de soma.<br>A soma %.2f + %.2f é de: %.2f", $value1, $value2, $sum);
        break;

    case "-";
        $subtraction = $value1 - $value2;
        createCard("Sua escolha foi de subtração.<br>A subtração %.2f - %.2f é de: %.2f", $value1, $value2, $subtraction);
        break;

    case "*":
        $multiplication = $value1 * $value2;
        createCard("Sua escolha foi de multiplicação.<br>A multiplicação %.2f x %.2f é de: %.2f", $value1, $value2, $multiplication);
        break;

    case "/":
        $division = $value1 / $value2;
        createCard("Sua escolha foi de divisão.<br>A divisão %.2f / %.2f é de: %.2f", $value1, $value2, $division);
        break;

    default:
        createCard("Número inválido. Insira novamente.");
        break;
}

require './fim.html';
?>