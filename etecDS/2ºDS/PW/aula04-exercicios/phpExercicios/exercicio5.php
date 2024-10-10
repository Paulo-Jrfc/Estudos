<?php

    require './inicio.html';
     
    $peso = $_GET['peso'];
    $valor = ($peso * 12);

    echo '<h1 align="center" style="color: white;">O valor é: </h1>';
    printf ('<center><div class="quadrado menor"><h2 >O valor para ser pago é de </h2><h2 class="titulo-maior" align="center">R$%.2f reais</h2></div></center>', $valor);

    require './fim.html';
?>