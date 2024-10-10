<?php

    require './inicio.html';
     
    $pequena = $_GET['pequena'];
    $media = $_GET['media'];
    $grande = $_GET['grande'];
    $valor = (($pequena * 10) + ($media * 12) + ($grande * 15)) ;
    


    print ('<center><div class="quadrado menor"><h2 >O valor total arrecadado é de </h2><h2 class="titulo-maior" align="center">R$%.2f</h2></div></center>', $valor);

    require './fim.html';
?>