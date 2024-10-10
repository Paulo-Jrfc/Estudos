<?php 
abstract class ClassConexao{
    public function Conectar(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=bdcontadorvisita","root","admin");
            return $conn;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}
?>