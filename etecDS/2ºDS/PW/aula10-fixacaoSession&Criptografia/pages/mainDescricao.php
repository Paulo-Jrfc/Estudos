<main style="margin-top: 15vh; min-height: 75vh;">
    <?php
    $id = $_GET['id'];
    require('./php/Class/ClassProdutoDAO.php');
    $listaProduto = ProdutoDao::retornaLista();
    $produto = ProdutoDao::retornaProduto($id, $listaProduto);
    if(((array_search($id, array_column($listaProduto, 'codProduto')) == null) == 1) && ($id != 1) == 1){
        header('Location: http://localhost:8081/aula10-fixacaoSession/produtos.php');
    }
    if ($produto == null || $id == null){
        header("Location: " . "http://localhost:8081/aula10-fixacaoSession/produtos.php");
        exit;
    }

    echo '<div class="container-xxl">
        <form method="POST" action="salvarCarrinho.php">
            <input name="id" type="hidden" value="'.$id.'"> 
            <div class="produto">
                <div class="descricao-img">
                    <img src="'.$produto->imgURL.'" alt="img">
                </div>
                <div class="descricao-texto" style="padding: 10px;">
                    <small id="fornecedor">'.$produto->fornecedor.'</small>
                    <h4>'.$produto->nome.'</h4>
                    <section style="display: flex; flex-direction: row; justify-content: space-between;><p id="preco">R$'.$produto->preco.'</p><input min="1" name="qtd" type="number" value="1"></section>
                    <br>
                    <script>function avisar(){
                        alert(\'Produto adicionado com sucesso!\');
                    }</script>
                    <button type="submit" class="btn btn-primary" onclick="avisar()">Adicionar ao carrinho</button>
                </div>
            </div>
        </form>
            <div class="descricao">
                <h2>Descrição do produto</h2>
                <p>'.$produto->descricao.'</p>
            </div>
        </div>';
    ?>
    
</main>