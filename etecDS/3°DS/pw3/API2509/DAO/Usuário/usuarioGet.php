<?php 
   

   function pegar_usuario($conexao){

    $sql = "SELECT * FROM tbl_usuarios";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $usuarios = [];

    while ($registro = mysqli_fetch_array($res)) {
        $ID = utf8_encode( $registro['ID']);
        $Nome = utf8_encode($registro['Nome']);
        $Endereco = utf8_encode(  $registro['Endereco']);
        $CPF = utf8_encode( $registro['C']);
        $dataNascimento = utf8_encode( $registro['dataNascimento']);
        $senha = utf8_encode( $registro['senha']);
        $papel = utf8_encode( $registro['papel']);
        
        $novo_usuario = new Usuario($id, $nome, $email, $telefone, $dataNascimento, $senha, $papel);
        array_push($usuarios ,$novo_usuario);
    };
    
    fecharConexao($conexao);
    return $usuarios;
   };

   
?>