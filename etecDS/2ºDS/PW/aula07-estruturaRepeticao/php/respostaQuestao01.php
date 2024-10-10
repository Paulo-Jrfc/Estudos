<?php
include("../assets/common/functions.php");
require("./content/inicio.php");
$valor = $_POST['numero'];

initColumn();
initCard();
echo "WHILE<br>";
$contador1 = 0;
while ($contador1 <= 10) {
    $produto = $contador1 * $valor;
    echo "$valor x $contador1  = $produto <br>";
    $contador1++;
}
endCard();
endColumn();

initColumn();
initCard();
echo "DO WHILE<br>";
$contador2 = 0;
do {
    $produto = $contador2 * $valor;
    echo "$valor x $contador2  = $produto <br>";
    $contador2++;
} while ($contador2 <= 10);
endCard();
endColumn();

initColumn();
initCard();
echo "FOR<br>";
for ($i = 0; $i <= 10; $i++) {
    $produto = $i * $valor;
    echo "$valor x $i  = $produto <br>";
}
endCard();
endColumn();
require("./content/fim.php");

?>