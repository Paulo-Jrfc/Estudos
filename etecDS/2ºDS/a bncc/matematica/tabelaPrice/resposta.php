<?php
    function thContent ($content){
        $th = '<th bgcolor="#e8eaeb">';
        $closeTh = '</th>';
        echo $th . $content . $closeTh;
    }
    
    function tdContent ($content){
        $td = '<td align="center">';
        $closeTd = '</td>';
        printf('%s%.2f%s', $td, $content, $closeTd);
    }

    function tdContentInt ($content){
        $td = '<td align="center">';
        $closeTd = '</td>';
        printf('%s%d%s', $td, $content, $closeTd);
    }
    
    function createHeader($category1, $category2, $category3, $category4, $category5){
        $tr = '<tr>';
        $closeTr = '</tr>';
        echo $tr;
        thContent($category1);
        thContent($category2);
        thContent($category3);
        thContent($category4);
        thContent($category5);
        echo $closeTr;
    }
    
    function createRow ($parcela, $valorParcela, $juros, $amortizacao, $saldoDevedor){
        $tr = '<tr>';
        $closeTr = '</tr>';
        echo $tr;
        tdContentInt($parcela);
        tdContent($valorParcela);
        tdContent($juros);
        tdContent($amortizacao);
        tdContent($saldoDevedor);
        echo $closeTr;
    }


    function imprimeTudo(){
        $contador = 0;
        $saldoDevedor = $_GET['saldoDevedor'];
        $taxaJuros = $_GET['taxaJuros'];
        $qtdParcelas = $_GET['qtdParcelas'];
        $taxaJuros = $taxaJuros / 100;
        $potencia = pow((1 + $taxaJuros), $qtdParcelas);
        $prestacao = $saldoDevedor *(($potencia * $taxaJuros)/($potencia - 1));
        echo '<table border="2px solid" align="center" class="tabela">';
        createHeader('Parcela', 'Valor da parcela', 'Juros', 'Amortização', 'Saldo Devedor');
        createRow('--', '--', '--', '--', $saldoDevedor);
        while ($saldoDevedor > 0 && $saldoDevedor > 1){
            $contador += 1;
            $juros = $saldoDevedor * $taxaJuros;
            $amortizacao = $prestacao - $juros;
            $saldoDevedor = $saldoDevedor - $amortizacao;
            createRow ($contador, $prestacao, $juros, $amortizacao, $saldoDevedor);
        }
        echo '</table>';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela Price</title>
</head>
<body>
    <?php imprimeTudo();?>
</body>
</html>