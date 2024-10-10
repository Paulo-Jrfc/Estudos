<?php 
    try{
        $conn = new PDO("mysql:dbname=db_produtos;host=localhost", "root", "admin");
        //echo "Conectado com sucesso";
    } catch (PDOException $e){
        echo $e->getMessage();
        exit;
    }
?>