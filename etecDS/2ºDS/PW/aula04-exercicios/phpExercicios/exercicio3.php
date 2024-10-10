<?php

    require './inicio.html';
    
    $paes = $_GET['paes'];
    $broas = $_GET['broas'];
    $valorPao = ($paes * 0.12);    
    $valorBroa = ($broas * 1.50);
    $valorTotal = $valorPao +  $valorBroa;
    $poupanca = $valorTotal * 0.1;
    $valorFinal = $valorTotal - $poupanca;
    
    

    echo '<h1 align="center" style="color: white;">Resultado:  </h1>';
    printf ('<center><div class="quadrado maior">
            <h2 class="titulo-maior preto">O valor Total é de: R$%.2f</h2>
            <h2 class="titulo-maior preto" align="center">O valor da poupança é de:  R$%.2f</h2>
            <h2 class="titulo-maior">O valor final será de: R$%.2f</h2>
            </div></center>', $valorTotal, $poupanca, $valorFinal);

    require './fim.html';
?>