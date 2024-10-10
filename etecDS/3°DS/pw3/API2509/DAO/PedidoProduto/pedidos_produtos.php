<?php 

function pegar_pedidos_produtos($conexao) {
    $sql = "SELECT * FROM pedidos_produtos";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $pedidos_produtos = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id_pedido = utf8_encode($registro['id_pedido']);
        $id_produto = utf8_encode($registro['id_produto']);
        $qtd = utf8_encode($registro['qtd']);
        
        $novo_pedido_produto = new PedidoProduto($id_pedido, $id_produto, $qtd);
        array_push($pedidos_produtos, $novo_pedido_produto);
    }
    
    fecharConexao($conexao);
    return $pedidos_produtos;
}
?>
