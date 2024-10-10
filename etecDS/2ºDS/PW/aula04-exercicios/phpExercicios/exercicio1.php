<?php

    require './inicio.html';
    

    $base = $_GET['base'];
    $altura = $_GET['altura'];
    $area = ($base * $altura);
    echo '<h1 align="center" style="color: white;">A área é de: </h1>';
    echo '<center><div class="quadrado menor"><h2 class="titulo-maior" align="center">' . $area . 'm²</h2></div></center>';

    require './fim.html';
?>