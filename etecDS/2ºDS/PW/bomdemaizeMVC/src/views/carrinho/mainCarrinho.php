<main style="margin-top: 5vh;;">
  <style>
    @media (min-width: 1025px) {
      .h-custom {
        min-height: 100vh !important;
      }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    .bg-grey {
      background-color: #eae8e8;
    }

    @media (min-width: 992px) {
      .card-registration-2 .bg-grey {
        border-top-right-radius: 16px;
        border-bottom-right-radius: 16px;
      }
    }

    @media (max-width: 991px) {
      .card-registration-2 .bg-grey {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
      }
    }
  </style>
  <section class="h-100 h-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Carrinho</h1>
                      <h6 class="mb-0 text-muted">
                        <?php if (isset($_SESSION['carrinho'])){echo sizeof($_SESSION['carrinho']);} else{echo "0";} ?> itens
                      </h6>
                    </div>
                        <h6 class="mb-0"><a href="http://localhost:8081/aula10-fixacaoSession/esvaziarCarrinho.php"
                            class="text-body">Esvaziar carrinho</a></h6>
                    <?php
                    $total = 0;
                    if (isset($_SESSION['carrinho'])){
                      foreach ($_SESSION['carrinho'] as $listaProdutos => $conjuntoProduto) {
                        $qtd = $conjuntoProduto['qtd'];
                        $produto = $conjuntoProduto['produto'];
                        $final = $produto->preco * $qtd;
                        $total += $final;
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
                    }
                    ?>
                    <hr class="my-4">
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="http://localhost:8081/aula10-fixacaoSession/produtos.php"
                          class="text-body">Continuar comprando</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Resumo</h3>
                    <hr class="my-4">
                    <h5 class="text-uppercase mb-3">Entrega</h5>

                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Entrega grátis - R$0,00</option>
                      </select>
                    </div>
                    <h5 class="text-uppercase mb-3">Código promocional</h5>
                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Entre seu código</label>
                      </div>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Preço total</h5>
                      <h5>R$<?php if (isset($_SESSION['carrinho'])){echo $total;} else{echo "0,00";} ?>
                      </h5>
                    </div>

                    <button type="button" class="btn btn-dark btn-block btn-lg"
                      data-mdb-ripple-color="dark">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>