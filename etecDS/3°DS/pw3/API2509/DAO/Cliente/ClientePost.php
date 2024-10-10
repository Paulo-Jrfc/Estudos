<?php 
   
   function incluir_cliente($conexao, $u){
      
        $sql = "INSERT INTO Cliente (Nome, Endereco, CPF, Telefone, Email, DataNascimento) VALUES ('$u->nome', '$u->endereco','$u->cpf', '$u->telefone', '$u->email','$u->datanascimento');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>