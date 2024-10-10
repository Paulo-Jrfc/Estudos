<?php
    $token = $_POST['token'];
    session_start();
    if($token != 'a0a184e1726928576abf82873bdb7bd7d34d9547'){
        echo json_encode(array('isTokenValid' => false));
    } else{
        echo json_encode(array('isTokenValid' => true));
    }
?>