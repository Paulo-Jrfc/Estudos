<?php 
abstract class ClassConexao{
    public function Conectar(){
        try{
            $conn = new PDO("mysql:host=fdb1034.awardspace.net;dbname=4045839_bdcontadorvisita","4045839_bdcontadorvisita","contadorvisita1");
            return $conn;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}
?>