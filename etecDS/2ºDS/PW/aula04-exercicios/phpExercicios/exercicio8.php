<?php

    require './inicio.html';
     
    $trabalhoDias = $_GET['trabalhoDias'];
    $anos = ($trabalhoDias / 365);
    $trabalhoDias %= 365;
    $meses = ($trabalhoDias / 30);
    $trabalhoDias %= 30;

    

    echo '<h1 align="center" style="color: white;">Dias sem acidente: </h1>';
    printf ('<center><div class="quadrado menor"><h2 >A quantidade de dias, meses e anos trabalhos sem acidentes serão: </h2><h2 class="titulo-maior" align="center">%.0f dias, %.0f meses, %.0f anos.</h2></div></center>', $trabalhoDias, $meses, $anos);

    require './fim.html';
?>