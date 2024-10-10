<?php 
    $titulo = "Session - Pagina03";
    require('./components/inicio.php');

    session_start();

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://localhost:8081/aula09-session/assets/json/pessoas.json'
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    $convertido = json_decode($response);
    $_SESSION['listaPessoas'] = $convertido;
    header('Location: http://localhost:8081/aula09-session/pagina04.php');
    require('./components/fim.php');
?>