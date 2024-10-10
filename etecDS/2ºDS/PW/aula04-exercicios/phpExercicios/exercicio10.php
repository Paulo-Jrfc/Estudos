<?php

    require './inicio.html';
     
    
    $normais = $_GET['normais'];
    $extras = $_GET['extras'];
    $valorNormal = 10.0;
    $valorExtras = 15.0;
    $salarioBruto = ($normais * $valorNormal) + ($extras * $valorExtras);
    $imposto = 0.1;
    $salarioLiquido = $salarioBruto - ($salarioBruto * $imposto);

    echo '<h1 align="center" style="color: white;">O salário bruto e liquido são: </h1>';
    printf ('<center><div class="quadrado menor"><h2 class="titulo-maior preto">Valor do salario com e sem desconto </h2>
    <h2 class="titulo-maior" align="center">Sálario Bruto: R$%.2f Sálario Líquido: R$%.2f</h2></div></center>', $salarioBruto, $salarioLiquido);
    require './fim.html';
?>