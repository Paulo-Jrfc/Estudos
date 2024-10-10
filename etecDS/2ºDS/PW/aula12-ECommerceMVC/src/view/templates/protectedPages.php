<?php
    session_start();
    if (isset($_SESSION['token'])){
        $data = array('token' => $_SESSION['token']);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://localhost:8081/aula12-ECommerceMVC/src/controller/TokenController.php');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $tokenManager = curl_exec($curl);
        curl_close($curl);
        $tokenManager = json_decode($tokenManager);
        if ($tokenManager->isTokenValid == true){
        } else{
            header ('location: /401');
        }
    } else{
        header ('location: /401');
    }
?>