<main style="margin-top: 15vh; height: 75vh;">
    <?php
    $id = $_GET['id'];
    require('./php/Class/ClassProdutoDAO.php');
    $listaProduto = ProdutoDao::retornaLista();
    $produto = ProdutoDao::retornaProduto($id, $listaProduto);
    if ($produto == null){
        header("Location: " . "http://localhost:8081/aula08-arrays/produtos.php");
        exit;
    }

    echo '<div class="container-xxl">
            <div class="produto">
                <div class="descricao-img">
                    <img src="'.$produto->imgURL.'" alt="img">
                </div>
                <div class="descricao-texto" style="padding: 10px;">
                    <small id="fornecedor">'.$produto->fornecedor.'</small>
                    <h4>'.$produto->nome.'</h4>
                    <p id="preco">R$'.$produto->preco.'</p>
                    <a class="btn btn-primary">Comprar!</a>
                </div>
            </div>
            <div class="descricao">
                <h2>Descrição do produto</h2>
                <p>'.$produto->descricao.'</p>
            </div>
        </div>';
    ?>
    
</main>