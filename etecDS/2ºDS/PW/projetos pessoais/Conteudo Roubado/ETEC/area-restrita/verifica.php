<?php


function VerificaDados($usuario,$senha){
    
    require_once '../area-restrita/connection.php';
    
    $pdo = getConnection();
    
    $sql = 'SELECT * FROM usuarios WHERE usuario LIKE :usuario AND senha LIKE :senha'; 
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':usuario',$usuario);
    $stmt->bindParam(':senha',$senha);

    $stmt->execute();
    
    if($stmt->rowCount() > 0){
        return true;
    }else{
        return false;
    }

}    



