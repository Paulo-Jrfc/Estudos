<?php
    require 'C:\\xampp\\htdocs\\aula12-ECommerceMVC\\src\\model\\ProdutoDAO.php';
    if (isset($_GET['id'])){
        echo json_encode(ProdutoDao::retornaProduto($_GET['id']));
    } else {
        echo ProdutoDAO::retornaLista();
    }
?>