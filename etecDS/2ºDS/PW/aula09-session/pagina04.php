<?php 
    $titulo = "Session - Pagina04";
    require('./components/inicio.php');
    session_start();
    $listaPessoas = $_SESSION['listaPessoas'];
    foreach($listaPessoas as $arrayPessoas => $pessoas){
        echo "Pessoas = " . $pessoas->nome . "<br>";
    }
    require('./components/fim.php');
?>