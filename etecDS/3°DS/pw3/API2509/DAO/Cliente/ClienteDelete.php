<?php 

function deletar_cliente($conexao, $id) {
    $sql = "DELETE FROM Clientes WHERE ID = $id;";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar deletar cliente");

    fecharConexao($conexao);
    return $res;
}
?>
