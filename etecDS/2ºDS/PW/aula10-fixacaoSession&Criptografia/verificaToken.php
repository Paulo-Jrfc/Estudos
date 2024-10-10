<?php
    session_start();
    $TOKEN = $_SESSION['token'];
    if($TOKEN != 'a0a184e1726928576abf82873bdb7bd7d34d9547'){
        header('location: http://localhost:8081/aula10-fixacaoSession/erro.php');
    }
?>