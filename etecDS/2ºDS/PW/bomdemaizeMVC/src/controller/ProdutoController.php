<?php
require('constants.php');
class ProdutoController{
    public function index(){
        $titulo = "Bom Demais - Produtos";
        include(SRC . 'utils/functions.php');
        include(VIEWS . 'templates/header.php');
        include(VIEWS . 'templates/navbar.php');
        include(SRC . 'model/ProdutoModel.php');
        include(VIEWS . 'produtos/index.php');
        include(VIEWS . 'templates/footer.php');
        include(VIEWS . 'templates/fim.php');
    }
}
?>