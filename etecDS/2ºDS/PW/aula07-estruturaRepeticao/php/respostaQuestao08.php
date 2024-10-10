<?php
include("../assets/common/functions.php");
require("./content/inicio.php");
$qtdEstoque = $_POST['estoque'];
$consumoDiario = 150;

initColumn();
initCard();
echo "WHILE<br>";
$qtdEstoque1 = $qtdEstoque;

while ($qtdEstoque1 > 0){
    $consumido = $qtdEstoque1 - $consumoDiario;

    if ($qtdEstoque1 < 150){
        $falta = ($qtdEstoque1 - 150) * -1;
        echo "Faltará $falta unidade(s) para completar o consumo de unidades do dia.<br>
        Será consumido <strong>$qtdEstoque1</strong> unidade(s).";
        break;
    }
    echo "$qtdEstoque1 unidades - 150 unidades (consumo diário) = <strong>$consumido</strong> unidade(s) restante(s)<br>";
    $qtdEstoque1 -= $consumoDiario;
}
endCard();
endColumn();

initColumn();
initCard();
echo "DO WHILE<br>";
$qtdEstoque2 = $qtdEstoque;
do {
    if ($qtdEstoque2 == 0){
        break;
    }
    $consumido = $qtdEstoque2 - $consumoDiario;
    if ($qtdEstoque2 < 150){
        $falta = ($qtdEstoque2 - 150) * -1;
        echo "Faltará $falta unidade(s) para completar o consumo de unidades do dia.<br>
        Será consumido <strong>$qtdEstoque2</strong> unidade(s).";
        break;
    }
    echo "$qtdEstoque2 unidades - 150 unidades (consumo diário) = <strong>$consumido</strong> unidade(s) restante(s)<br>";
    $qtdEstoque2 -= $consumoDiario;
} while ($qtdEstoque2 > 0);

endCard();
endColumn();

initColumn();
initCard();
echo "FOR<br>";
$qtdEstoque3 = $qtdEstoque;
for ($i=0; $qtdEstoque3 > 0;) { 
    $consumido = $qtdEstoque3 - $consumoDiario;
    if ($qtdEstoque3 < 150){
        $falta = ($qtdEstoque3 - 150) * -1;
        echo "Faltará $falta unidade(s) para completar o consumo de unidades do dia.<br>
        Será consumido <strong>$qtdEstoque3</strong> unidade(s).";
        break;
    }
    echo "$qtdEstoque3 unidades - 150 unidades (consumo diário) = <strong>$consumido</strong> unidade(s) restante(s)<br>";
    $qtdEstoque3 -= $consumoDiario;
}
endCard();
endColumn();
require("./content/fim.php");
?>