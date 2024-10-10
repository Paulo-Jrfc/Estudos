<?php
session_start();

if(!isset($_POST['usuario'])){
    header("location:../login/login.php");
}else{
        $senha = $_POST['senha'];
        $usuario = $_POST['usuario'];
        
        require_once 'verifica.php';
        
        if(VerificaDados($usuario,$senha)==false){
                $_SESSION['NaoAutorizado'] = 1;
                 if(isset($_SESSION['NaoAutorizado'])){
                          header('location:../login/login.php');
                 }
               
        }else{
                $_SESSION['Autorizado'] = 1;
                if(isset($_SESSION['Autorizado'])){
                        header('location:conteudo/paginaPrincipal.php');
                }
        }
        
 
 
}