<?php
include("../assets/common/functions.php");
require("./content/inicio.php");
$VALOR = $_POST['numero'];

initColumn();
initCard();
echo "WHILE<br>";
$contador1 = $VALOR;
if($contador1 == 0){
    echo "É impossível dividir um número por 0.<br>";
}
while($contador1 >= 1){
    
    if ($VALOR % $contador1 == 0){
        $div = $VALOR / $contador1;
        echo "$VALOR / <strong>$contador1</strong> = $div<br>";
    }
    $contador1--;
}

endCard();
endColumn();

initColumn();
initCard();
echo "DO WHILE<br>";
$contador2 = $VALOR;
if($contador2 == 0){
    echo "É impossível dividir um número por 0.<br>";
} else{
    do {
        if ($VALOR % $contador2 == 0){
            $div = $VALOR / $contador2;
            echo "$VALOR / <strong>$contador2</strong> = $div<br>";
        }
        $contador2--;
    } while ($contador2 >= 1);
}
endCard();
endColumn();

initColumn();
initCard();
echo "FOR<br>";
if($VALOR == 0){
    echo "É impossível dividir um número por 0.<br>";
}
for ($i=$VALOR; $i >= 1; $i--) { 
    if ($VALOR % $i == 0){
        $div = $VALOR / $i;
        echo "$VALOR / <strong>$i</strong> = $div<br>";
    }
}
endCard();
endColumn();
require("./content/fim.php");
?>