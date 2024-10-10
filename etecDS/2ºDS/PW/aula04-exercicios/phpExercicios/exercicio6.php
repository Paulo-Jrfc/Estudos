<?php

    require './inicio.html';
     
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = (($nota1 * 1) + ($nota2 * 2) + ($nota3 * 3))/(1+2+3);
    


    echo '<h1 align="center" style="color: white;">A média ponderada é: </h1>';
    printf ('<center><div class="quadrado menor"><h2 >A média ponderada de uma das disciplina é de </h2><h2 class="titulo-maior" align="center"> %.2f  </h2></div></center>', $media);

    require './fim.html';
?>