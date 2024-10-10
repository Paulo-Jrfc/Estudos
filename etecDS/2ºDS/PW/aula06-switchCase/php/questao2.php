<?php
    require "../common/functions.php";
    require "./inicio.html";
    $choice = $_GET['escolha'];
    $orderValue = $_GET['valorCompra'];
    switch($choice){
        case 1:
            $discount = $orderValue * 0.15;
            $finalValue = $orderValue - $discount;
            createCard("Sua escolha foi de $choice, ou seja, a vista. O seu desconto foi de 15%%. <br>
            O valor inicial é de: %.2f<br>
            O valor do desconto é de: %.2f<br>
            O valor promocional é de: %.2f", $orderValue, $discount, $finalValue);
            break;
        case 2:
            $discount = $orderValue * 0.10;
            $finalValue = $orderValue - $discount;
            createCard("Sua escolha foi de $choice, ou seja, a prazo. O seu desconto foi de 10%%. <br>
            O valor inicial é de: %.2f<br>
            O valor do desconto é de: %.2f<br>
            O valor promocional é de: %.2f", $orderValue, $discount, $finalValue);
            break;
        default:
        createCard("Nenhuma das opções da tabela foi escolhida. Tente novamente.", null);
            break;
        } 
    require "./fim.html";
?>
