<?php 
    $titulo = "Session - Pagina02";
    require('./components/inicio.php');

    session_start();
    echo $_SESSION['nome'];

    require('./components/fim.php');
?>