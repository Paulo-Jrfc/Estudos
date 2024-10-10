<?php
session_start();
        if(!isset($_SESSION['Autorizado'])){
                header('location:../login/login.php');
        }
?>