<?php

function initCard(): void
{
    echo '    
    <div class="card2">
        <div class="log">';
}

function endCard()
{
    echo '
        </div> 
    </div>
    ';
}

function genericPrintf($msg, ...$params)
{
    echo sprintf("$msg", ...$params);
}

function createCard($msg, ...$params)
{
    initCard();
    genericPrintf($msg, ...$params);
    endCard();
}

function initColumn()
{
    echo '<div class="column">';
}

function endColumn()
{


    echo '</div>';
}

function initBtrspCard(string $urlImg, string $titulo, string $descricao)
{
    echo '<div class="card text-center" style="width: 20rem; heigth: 2rem;">
    <img src="' . $urlImg . '" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">' . $titulo . '</h5>
      <p class="card-text">' . $descricao . '</p>';
}

function endBtrspCard($preco, $id)
{
    echo ' <a href="/produto?id=' . $id . '"  class="btn btn-primary" style="">Comprar!</a>
    </div>
    <div class="card-footer">
    <small class="text-body-secondary">R$' . sprintf("%.2f", $preco) . '</small>
    </div>

  </div>';
}

function createBtsrpCard(string $urlImg, string $titulo, string $descricao, $preco, $id)
{
    initBtrspCard($urlImg, $titulo, $descricao);
    endBtrspCard($preco, $id);
}

function createRowCarrinho($conjuntoProduto)
{
    $qtd = $conjuntoProduto['qtd'];
    $produto = $conjuntoProduto['qtd'];
    echo '<hr class="my-4">
            <div class="row mb-4 d-flex justify-content-between align-items-center" style="flex-wrap: nowrap;"> 
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="' . $produto->imgURL . '" class="img-fluid rounded-3" alt="imagem">
                </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                                    <h6 class="text-muted">' . $produto->nome . '</h6>
                                    <h6 class="text-black mb-0">' . $produto->descricao . '</h6>
                                  </div>
                                  <div class="col-md-3 col-lg-3 col-xl-3">
                                    <h6 class="text-muted">Quantidade</h6>
                                    <h6 class="text-black mb-0">' . $qtd . '</h6>
                                  </div>
                                  <div class="col-md-3 col-lg-3 col-xl-3">
                                    <h6 class="text-muted">Preço</h6>
                                    <h6 class="text-black mb-0">R$' . $produto->preco . '</h6>
                                  </div>
                                  <div class="col-md-3 col-lg-3 col-xl-3">
                                    <h6 class="text-muted">Final</h6>
                                    <h6 class="text-black mb-0">R$' . sprintf("%.2f", $final) . '</h6>
                                  </div>
        </div>';
}
