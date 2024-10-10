<?php 
   

   function pegar_usuario($conexao){

    $sql = "SELECT * FROM pessoas";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $usuarios = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id = utf8_encode( $registro['id']);
        $nome = utf8_encode($registro['nome']);
        $sobrenome = utf8_encode($registro['sobrenome']);
        $idade = utf8_encode( $registro['idade']);
        $cpf = utf8_encode( $registro['cpf']);
        $renda = utf8_encode( $registro['renda']);
        
        $novo_usuario = new Usuario($id, $nome, $sobrenome, $idade, $cpf, $renda);
        array_push($usuarios ,$novo_usuario);
    };
    
    fecharConexao($conexao);
    return $usuarios;
   };

   
?>