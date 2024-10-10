<?php

    require './inicio.html';
     
    $price = $_GET['price'];
    $pagamento = $_GET['pagamento'];
    $litro = ($pagamento / $price);

    echo '<h1 align="center" style="color: white;">Quantidade de litros é: </h1>';
    printf ('<center><div class="quadrado menor"><h2 class="titulo-maior" align="center">Você consegue colocar em seu tanque: %.2f litros de gasolina</h2></div></center>', $litro);

    require './fim.html';
?>