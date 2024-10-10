<?php

function initCard():void
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
    echo ' <a href="descricao.php?id=' . $id . '"  class="btn btn-primary" style="">Comprar!</a>
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

function createRowCarrinho()
{   
    echo "";
}

?>

