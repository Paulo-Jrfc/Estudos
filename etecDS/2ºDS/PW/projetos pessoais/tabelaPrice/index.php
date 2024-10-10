<?php



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela Price!</title>
</head>
<body>
<form class="form1" method="GET" action="resposta.php">
    <div class="quadrado">
        <h2 class="titulo">Cálculo da Tabela Price</h2>
        <div class="grupos">
            <label>Insira o saldo devedor, em reais:</label>
            <input type="text" name="saldoDevedor" placeholder="Digite o saldo devedor" required>
        </div>
        <div class="grupos">
            <label>Insira a taxa de juros mensais, em número (ex: 1.5 pra 1,5%):</label>
            <input type="text" name="taxaJuros" placeholder="Insira a taxa de juros, em número (ex: 50 para 50%)" required>
        </div>
        <div class="grupos">
            <label>Insira a quantidade de parcelas mensais:</label>
            <input type="text" name="qtdParcelas" placeholder="Insira a quantidade de parcelas mensais:" required>
        </div>
        <div class="grupos">
          <button type="submit" class="botao">CALCULAR</button>
        </div>
    </div>
</form>
</body>
</html>