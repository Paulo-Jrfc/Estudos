<?php
class ProdutoDao{

    static function retornaLista(){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost:8081/aula08-arrays/json/listaProdutos.json'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $convertido = json_decode($response);
        return $convertido;
    }

    static function retornaProduto(int $id, $listaProduto){
        foreach ($listaProduto as $arrayLista => $produto){
            if ($produto->codProduto === $id) {
                return $produto;
            }
        }
        return null;
    }
}  

?>