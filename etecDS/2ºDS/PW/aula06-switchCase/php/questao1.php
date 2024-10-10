<?php
    require "../common/functions.php";
    require "./inicio.html";
    $choice = $_GET['numero'];
    switch($choice){
        case 1:
            createCard("Sua escolha foi $choice, ou seja, Alimento Perecível!", null);
            break;
        case 2:
            createCard("Sua escolha foi $choice, ou seja, Alimento Não-Perecível!", null);
            break;
        case 3:
            createCard("Sua escolha foi $choice, ou seja, Vestuário!", null);
            break;
        case 4:
            createCard("Sua escolha foi $choice, ou seja, Limpeza!", null);
            break;
        default:
        createCard("Nenhuma das opções da tabela foi escolhida. Tente novamente.", null);
            break;
        } 
    require "./fim.html";
?>
