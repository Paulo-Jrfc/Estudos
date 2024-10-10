<?php 
    $DSN = "mysql:host=fdb1034.awardspace.net;dbName=4045839_crud;charset_utf8";
    $usuario= "4045839_crud";
    $senha = "Crud@2023";
    try{
        $conexao = new PDO($DSN, $usuario, $senha);
        echo "Conectado com sucesso";
    } catch (PDOException $e){
        echo $e->getMessage();
        exit;
    }
?>