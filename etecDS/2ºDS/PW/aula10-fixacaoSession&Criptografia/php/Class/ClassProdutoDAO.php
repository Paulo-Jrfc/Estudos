<?php
class ProdutoDao{

    static function retornaLista(){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost:8081/aula10-fixacaoSession/json/listaProdutos.json'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $convertido = json_decode($response);
        return $convertido;
    }

    static function retornaProduto(int $id, $listaProduto){
        $chave = array_search($id, array_column($listaProduto, 'codProduto'));
        $produto = $listaProduto[$chave];
        return $produto;
    }
}  

?>