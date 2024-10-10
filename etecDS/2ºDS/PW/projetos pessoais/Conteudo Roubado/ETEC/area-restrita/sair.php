<?php
header('location:../login/login.php');

session_start();

unset($_SESSION['Autorizado']);

session_destroy();


?>