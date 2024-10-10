<?php

    require './inicio.html';
    

    $carName = $_GET['name'];
    $carPrice = $_GET['price'];
    $finalPrice = ($carPrice * 1.45) + ($carPrice * 0.28);
    
    echo '<h1 align="center" style="color: white;">Resultado:  </h1>';
    printf ('<center><div class="quadrado menor">
            <h2 class="titulo-maior preto">Nome do automóvel: ' . $carName.'</h2>
            <h2 class="titulo-maior preto" align="center">Preço final:</h2>
            <h2 class="titulo-maior">R$%.2f</h2>
            </div></center>', $finalPrice);

    require './fim.html';
?>