<?php
include("../assets/common/functions.php");
require("./content/inicio.php");
$valor = $_POST['numero'];

initColumn();
initCard();
echo "WHILE<br>";

if ($valor == 0) {
    echo '0! = 1';
} else {
    $contador1 = $valor;
    $produto = $contador1;
    if ($produto == 1) {
        echo "$contador1! ";
    } else {
        echo "$valor *";
    }
    while ($contador1 > 1) {
        $proxNum = $contador1 - 1;
        $produto = $produto * $proxNum;
        if ($proxNum == 1 || $proxNum == 0) {
            if ($proxNum == 1) {
                echo " $proxNum ";
            } else {
                $produto = 1;
            }
        } else {
            echo " $proxNum *";
        }
        $contador1--;
    }
    echo "= <strong>$produto</strong><br>";
}


endCard();
endColumn();

initColumn();
initCard();
echo "DO WHILE<br>";
if ($valor == 0) {
    echo '0! = 1';
} else {
    $contador2 = $valor;
    $produto = $contador2;
    if ($produto == 1) {
        echo "$contador2! ";
    } else {
        echo "$valor *";
    }
    do {
        $proxNum = $contador2 - 1;
        $produto = $produto * $proxNum;
        if ($proxNum == 1 || $proxNum == 0) {
            if ($proxNum == 1) {
                echo " $proxNum ";
            } else {
                $produto = 1;
            }
        } else {
            echo " $proxNum *";
        }
        $contador2--;
    } while ($contador2 > 1);
    echo "= <strong>$produto</strong><br>";
}
endCard();
endColumn();

initColumn();
initCard();
echo "FOR<br>";
if ($valor == 0) {
    echo '0! = 1';
} else {
    $produto = $valor;
    if ($produto == 1) {
        echo "$produto! ";
    } else {
        echo "$valor *";
    }
    for ($i = $valor; $i > 1; $i--) {
        $proxNum = $i - 1;
        $produto = $produto * $proxNum;
        if ($proxNum == 1 || $proxNum == 0) {
            if ($proxNum == 1) {
                echo " $proxNum ";
            } else {
                $produto = 1;
            }
        } else {
            echo " $proxNum *";
        }
    }
    echo "= <strong>$produto</strong><br>";
}

endCard();
endColumn();
require("./content/fim.php");
?>