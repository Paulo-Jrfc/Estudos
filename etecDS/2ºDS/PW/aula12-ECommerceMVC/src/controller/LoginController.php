<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaInterna = "MTIzNDU2";
    $emailInterno = "cGF1bG9AZ21haWwuY29t";
    if($senha == base64_decode($senhaInterna) && $email == base64_decode($emailInterno)){
        $TOKEN = sha1("#bb412abc");
        echo json_encode(array ('isLoginValid' => true, 'token' => $TOKEN));
    }else{
        echo json_encode(array('isLoginValid' => false, 'token' => 'null'));
    }
?>