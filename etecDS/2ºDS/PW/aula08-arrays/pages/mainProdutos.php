<main style="margin-top: 15vh;">
    <div class="container">
        <h1 style="text-align: center;">Produtos</h1>
        <div class="flex">
            <?php 
                require('./php/Class/ClassProdutoDAO.php');
                $lista = ProdutoDAO::retornaLista();
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