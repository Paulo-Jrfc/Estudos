<?php

if(isset($_POST['btn'])){

    $categoria = $_POST['btn'];
    
    $nomeCookie = 'categoria' . $categoria;
    
    setCookie($nomeCookie, 1, time() + 1);
    
}
header('Location:index.php');
