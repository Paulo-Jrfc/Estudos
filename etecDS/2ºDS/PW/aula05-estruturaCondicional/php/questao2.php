<?php

require './inicio.html';


$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

echo '
    <div class="card maior naoFixo">
        <div class="log"><p>A ordem decrescente é de: </p>
';



if(($numero1 > $numero2) && ($numero1 > $numero3)){
    echo '<p>' . $numero1 . '</p><br>';
    if ($numero2 > $numero3){
        echo '<p> ' . $numero2 . ' </p><br>';
        
        echo '<p> ' . $numero3 . ' </p><br>';
    } else {
        echo '<p> ' . $numero3 . ' </p><br>';
        echo '<p> ' . $numero2 . ' </p><br>';
    }
}

if(($numero2 > $numero1) && ($numero2 > $numero3)){
    echo '<p>' . $numero2 . '</p><br>';
    if ($numero1 > $numero3){
        echo '<p> ' . $numero1 . ' </p><br>';
        echo '<p> ' . $numero3 . ' </p><br>';
    } else {
        echo '<p> ' . $numero3 . ' </p><br>';
        echo '<p> ' . $numero1 . ' </p><br>';
    }
}

if(($numero3 > $numero1) && ($numero3 > $numero2)){
    echo '<p>' . $numero3 . '</p>';
    if ($numero1 > $numero2){
        echo '<p> ' . $numero1 . ' </p>';
        echo '<p> ' . $numero2 . ' </p>';
    } else {
        echo '<p> ' . $numero2 . ' </p>';
        echo '<p> ' . $numero1 . ' </p>';
    }
}



echo '</div></div>';
require './fim.html';
?>
<style>
    body{
        margin: 15% auto;
    }
</style>