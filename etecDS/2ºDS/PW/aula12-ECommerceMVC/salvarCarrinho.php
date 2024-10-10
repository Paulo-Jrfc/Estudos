<?php
    
    $id = $_POST['id'];
    $qtd = $_POST['qtd'];

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'http://localhost:8081/aula12-ECommerceMVC/src/controller/ProdutoController.php?id=' . $id,
        CURLOPT_RETURNTRANSFER => 1
    ]);
    $produto = curl_exec($curl);
    $produto = json_decode($produto);
    curl_close($curl);

    session_start();
    //se A variável da sessão carrinho não estiver vazia e se a variável carrinho da sessão foi inicializada
    if(!empty($_SESSION['carrinho']) && isset($_SESSION['carrinho'])){
        //cria uma lista pegando do array carrinho da sessão apenas com os produtos
        $listaProduto = array_column($_SESSION['carrinho'], 'produto');
        $idProdutos = array_column($listaProduto, 'codProduto');
        $notInList = array_search($id, $idProdutos) === false ? true : false;
        if($notInList){
            //adiciona produto na lista
            array_push($_SESSION['carrinho'], array('qtd' => $qtd, 'produto' => $produto));
        } else{
            //aumenta a quantidade do produto na lista
            $_SESSION['carrinho'][array_search($id, array_column($listaProduto, 'codProduto'))]['qtd'] += $qtd;
        }
    } else{
        //cria o array carrinho
        $_SESSION['carrinho'] = array();
        //adiciona o produto na lista
        array_push($_SESSION['carrinho'], array('qtd' => $qtd, 'produto' => $produto));
    }
    //redireciona ao link do qual fez o post
    header("Location:" . $_SERVER['HTTP_REFERER']);
?>