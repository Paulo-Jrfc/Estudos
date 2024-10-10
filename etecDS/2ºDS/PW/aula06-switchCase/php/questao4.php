<?php
require "./inicio.html";
require '../common/functions.php';

$stdSituation = $_GET['situacao'];
$stdSituation = strtolower($stdSituation);

switch ($stdSituation) {
    case "a":
        createCard("Excelente, você se dedicou muito e atingiu o nível máximo. Parabéns.");
        break;

    case "b":
        createCard("Você realizou tudo que proposto, continue assim. Talvez um pouco mais de esforço te leve ainda mais a frente.");
        break;

    case "c":
        createCard("Você tirou nota suficiente para finalizar o semestre, mas pode fazer mais.");
        break;

    case "d":
        createCard("Você tirou nota insuficiente, precisa melhorar.");
        break;

    case "e":
        createCard("Você deixou muito a desejar, precisa mudar com urgência.");
        break;

    case "f":
        createCard("Você não está vindo para o colégio para estudar, é imperativo uma mudança de perfil.");
        break;

    default:
        createCard("Situação inválida. Insira novamente.");
        break;
}

require './fim.html';

?>