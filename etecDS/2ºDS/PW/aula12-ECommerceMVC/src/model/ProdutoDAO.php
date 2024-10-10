<?php
class ProdutoDAO{
    static function retornaLista(){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost:8081/aula12-ECommerceMVC/json/listaProdutos.json'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    static function retornaProduto(int $id){
        $listaProduto = ProdutoDao::retornaLista();
        $listaProduto = json_decode($listaProduto);
        $chave = array_search($id, array_column($listaProduto, 'codProduto'));
        $produto = $listaProduto[$chave];
        return $produto;
    }
}
?>