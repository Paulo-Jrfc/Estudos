<?php

require './inicio.html';
require '../common/functions.php';

$selecao = $_GET['selecao'];
$valorEtiqueta = $_GET['valorEtiqueta'];

switch($selecao){
    case 1:
        $valorFinal = $valorEtiqueta - ($valorEtiqueta * 0.1);
        createCard('O valor de etiqueta é de: R$%.2f.<br>
                    O valor final, a vista no dinheiro ou cheque com 10%% de desconto é de: R$%.2f'
                    , $valorEtiqueta, $valorFinal);
        break;
    case 2:
        $valorFinal = $valorEtiqueta - ($valorEtiqueta * 0.15);
        createCard('O valor de etiqueta é de: R$%.2f.<br>
                    O valor final, a vista no cartão de crédito com 15%% de desconto é de: R$%.2f'
                    , $valorEtiqueta, $valorFinal);
        break;
    
    case 3:
        $valorParcela = $valorEtiqueta / 2;
        $valorFinal = $valorParcela * 2;
        createCard('O valor de etiqueta é de: R$%.2f.<br>
                    Serão duas parcelas de: R$%.2f sem juros.<br>
                    O valor final será de: R$%.2f.'
                    , $valorEtiqueta, $valorParcela, $valorFinal);
        break;

    case 4:
        $valorParcela = ($valorEtiqueta * 1.1)/2;
        $juros = $valorEtiqueta * 0.1;
        $valorFinal = $valorParcela * 2;
        createCard('O valor de etiqueta é de: R$%.2f.<br>
                    Serão duas parcelas de: R$%.2f com juros de 10%% (R$%.2f).<br>
                    O valor final será de: R$%.2f.'
                    , $valorEtiqueta, $valorParcela, $juros, $valorFinal);
            break;
}
require './fim.html';
?>

<style>
    body{
        margin: 15% auto;
    }
</style>