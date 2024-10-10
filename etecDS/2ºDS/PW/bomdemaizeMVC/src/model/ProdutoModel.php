<?php
class ProdutoModel{
    static function retornaLista():mixed{
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost:8081/bomdemaizeMVC/json/listaProdutos.json'
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