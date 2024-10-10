<?php
require "./inicio.html";
require '../common/functions.php';

$month = $_GET['mes'];

switch ($month) {
    case 1:
        createCard("Janeiro.");
        break;

    case 2:
        createCard("Fevereiro.");
        break;

    case 3:
        createCard("Março.");
        break;

    case 4:
        createCard("Abril.");
        break;

    case 5:
        createCard("Maio.");
        break;

    case 6:
        createCard("Junho.");
        break;

    case 7:
        createCard("Julho.");
        break;

    case 8:
        createCard("Agosto.");
        break;

    case 9:
        createCard("Setembro.");
        break;

    case 10:
        createCard("Outubro.");
        break;

    case 11:
        createCard("Novembro.");
        break;

    case 12:
        createCard("Dezembro.");
        break;

    default:
        createCard("Número inválido, insira novamente.");
        break;

}

require './fim.html';

?>