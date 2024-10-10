<?php
    require('./php/Class/ClassProdutoDAO.php');
    require("verificaToken.php");
    $id = $_POST['id'];
    $qtd = $_POST['qtd'];
    //se A variável da sessão carrinho não estiver vazia e se a variável carrinho da sessão foi inicializada
    if(empty($_SESSION['carrinho']) != true && isset($_SESSION['carrinho'])){
        //cria uma lista pegando do array carrinho da sessão apenas com os produtos
        $listaProduto = array_column($_SESSION['carrinho'], 'produto');
        //verifica se o id está na lista e o id é um 
        $isIdOne = array_search($id, array_column($listaProduto, 'codProduto')) == 0 && ($id == 1);
        //se não tem na lista o produto que eu quero ou id 1 está na lista e na posição 0
        if((((bool)(array_search($id, array_column($listaProduto, 'codProduto')) || $isIdOne) === false) === true)){
            //adiciona o produto na lista
            array_push($_SESSION['carrinho'], array('qtd' => $qtd, 'produto' => ProdutoDao::retornaProduto($id, ProdutoDao::retornaLista())));
        } else{
            //aumenta a quantidade do produto na lista
            $_SESSION['carrinho'][array_search($id, array_column($listaProduto, 'codProduto'))]['qtd'] += $qtd;
        }
    } else{
        //cria o array carrinho
        $_SESSION['carrinho'] = array();
        //adiciona o produto na lista
        array_push($_SESSION['carrinho'], array('qtd' => $qtd, 'produto' => ProdutoDao::retornaProduto($id, ProdutoDao::retornaLista())));
    }
    //redireciona ao link do qual fez o post
    header("Location:" . $_SERVER['HTTP_REFERER']);
?>