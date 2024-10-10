<?php

    require './inicio.html';
     
    $salario = $_GET['salario'];
    $salarioAumento = ($salario * 1.15 ) ;
    $salarioDesconto = ($salarioAumento - ($salarioAumento * 0.08));

    


    echo '<h1 align="center" style="color: white;">O valor do salário é é: </h1>';
    printf ('<center><div class="quadrado maior"><h2 class="titulo-maior preto">Valor do salario com e sem desconto: </h2>
    <h2 class="titulo-maior preto" align="center">Sálario inicial: R$%.2f Sálario com aumento: R$%.2f<br>Sálario com desconto:  R$%.2f</h2>
    </div></center>)', $salario, $salarioAumento, $salarioDesconto);

    require './fim.html';
?>