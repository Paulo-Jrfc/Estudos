<?php
include("../assets/common/functions.php");
require("./content/inicio.php");
$valor = $_POST['numero'];




initColumn();
initCard();
echo "WHILE<br>";
$contador1 = 0;
while ($contador1 <= $valor) {
    
    if ($contador1 % 2 == 0){
        $contador1++;
    }

    $restante = $valor - $contador1;
    echo "<strong>$contador1</strong>. Falta $restante números restantes <br>";
    
    $contador1++;

    if($contador1 == $valor){
        echo "<strong style=\"color: red;\">$contador1</strong>. Falta 0 números restantes <br>";
        break;
    }
}
endCard();
endColumn();

initColumn();
initCard();
echo "DO WHILE<br>";
$contador2 = 0;
do {
    if ($contador2 % 2 == 0){
        $contador2++;
    }

    $restante = $valor - $contador2;
    echo "<strong>$contador2</strong>. Falta $restante números restantes <br>";
    
    $contador2++;

    if($contador2 == $valor){
        echo "<strong style=\"color: red;\">$contador1</strong>. Falta 0 números restantes <br>";
        break;
    }
} while ($contador2 <= $valor);
endCard();
endColumn();

initColumn();
initCard();
echo "FOR<br>";
for ($i = 0; $i <= $valor;) {
    
    if ($i % 2 == 0){
        $i++;
    }

    $restante = $valor - $i;
    echo "<strong>$i</strong>. Falta $restante números restantes <br>";
    
    $i++;

    if($i == $valor){
        echo "<strong style=\"color: red;\">$contador1</strong>. Falta 0 números restantes <br>";
        break;
    }
}
endCard();
endColumn();
require("./content/fim.php");

?>