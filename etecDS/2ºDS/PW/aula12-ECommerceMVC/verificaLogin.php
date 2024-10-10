<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data = array('email' => $email, 'senha' => $senha);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://localhost:8081/aula12-ECommerceMVC/src/controller/LoginController.php');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response);
    if ($response->isLoginValid === true){
        session_start();
        var_dump($response);
        $_SESSION['token'] = $response->token;
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/produtos');
    } else{
        header ('location: ' . $_SERVER['HTTP_REFERER']);
    }
?>