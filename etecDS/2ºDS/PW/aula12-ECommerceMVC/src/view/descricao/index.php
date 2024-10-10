<?php
    require ('C:\\xampp\\htdocs\\aula12-ECommerceMVC\\src\\view\\constants.php');
    $titulo = "Bom Demais - Descrição";
    include(SRC . 'utils/functions.php');
    include(VIEWS . 'templates/header.php');
    include(VIEWS . 'templates/protectedPages.php');
    include(VIEWS . 'templates/navbar.php');
?>
<main style="margin-top: 15vh; min-height: 75vh;">
    <?php
    $id = $_GET['id'];
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'http://localhost:8081/aula12-ECommerceMVC/src/controller/ProdutoController.php?id=' . $id,
        CURLOPT_RETURNTRANSFER => 1
    ]);
    $produto = curl_exec($curl);
    $produto = json_decode($produto);
    curl_close($curl);
    if ($produto->codProduto == 1 && $id != 1){
        header('location: ' . $_SERVER['HTTP_REFERER']);
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
<?php
    include(VIEWS . 'templates/footer.php');
    include(VIEWS . 'templates/fim.php');
?>