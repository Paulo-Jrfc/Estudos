<?php
    require ('C:\\xampp\\htdocs\\aula12-ECommerceMVC\\src\\view\\constants.php');
    $titulo = "Bom Demais - Produtos";
    include(SRC . 'utils/functions.php');
    include(VIEWS . 'templates/header.php');
    include(VIEWS . 'templates/navbar.php');
    include(VIEWS . 'templates/protectedPages.php');
?>

<main style="margin-top: 15vh;">
    <div class="container">
        <h1 style="text-align: center;">Produtos</h1>
        <div class="flex">
            <?php
                $curl = curl_init('http://localhost:8081/aula12-ECommerceMVC/src/controller/ProdutoController.php');
                curl_setopt_array($curl, [CURLOPT_RETURNTRANSFER => 1]);
                $lista = curl_exec($curl);
                $lista = json_decode($lista);
                curl_close($curl);
                foreach ($lista as $arrayLista => $produto) {
                    $nome = $produto->nome;
                    $descricao = $produto->descricao;
                    $preco = $produto->preco;
                    $img = $produto->imgURL;
                    initBtrspCard($img, $nome, $descricao);
                    endBtrspCard($preco, $produto->codProduto);
                }
            ?>
        </div>
    </div>
</main>
<?php
    include(VIEWS . 'templates/footer.php');
    include(VIEWS . 'templates/fim.php');
?>