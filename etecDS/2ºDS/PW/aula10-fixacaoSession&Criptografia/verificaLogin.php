<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaInterna = "MTIzNDU2";
    $emailInterno = "cGF1bG9AZ21haWwuY29t";
    if($senha == base64_decode($senhaInterna) && $email == base64_decode($emailInterno)){
        $TOKEN = sha1("#bb412abc");
        session_start();
        $_SESSION['token'] = $TOKEN;
        header('location: http://localhost:8081/aula10-fixacaoSession/produtos.php');
    }else{
        header('location: http://localhost:8081/aula10-fixacaoSession/erro.php');
    }
?>