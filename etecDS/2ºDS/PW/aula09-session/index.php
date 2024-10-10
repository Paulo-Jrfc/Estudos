<?php 
    $titulo = 'Sessão - Pagina01';
    require('./components/inicio.php');
    session_start();
    $_SESSION['nome'] = 'Paulo Junior';
    echo $_SESSION['nome'];
    require('./components/fim.php');
?>