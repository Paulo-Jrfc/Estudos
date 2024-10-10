<?php
include("./class/ClassVisitas.php");
## Criando a conexão com o banco
$connection = new ClassVisitas();
$connection->VerificaUsuario();
$connection = null;

##Estruturação do site
$nomeSite = "SPF Fraudada!";
require("./content/inicio.php");
require("./content/navbar.php");
require("./noticias/noticia.php");
require("./content/footer.php");
require("./content/fim.php"); 
?>


