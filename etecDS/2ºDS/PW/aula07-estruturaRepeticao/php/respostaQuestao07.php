<?php
include("../assets/common/functions.php");
require("./content/inicio.php");
$massaInicial = $_POST['massa'];

initColumn();
initCard();
echo "WHILE<br>";
$massa1 = $massaInicial;
$segundos = 0;
while ($massa1 >= 0.5) {
    $massa1 /= 2;
    $segundos += 50;
}
$horas = intdiv($segundos, 3600);
$segundos %= 3600;
$minutos = intdiv($segundos, 60);
$segundos %= 60;
printf("A massa inicial é de: $massaInicial " . "g<br>
        A massa final é de: %.2f" . "g.<br>
        O tempo total foi de $horas horas, $minutos minutos, $segundos segundos.<br>", $massa1);
endCard();
endColumn();

initColumn();
initCard();
echo "DO WHILE<br>";
$massa2 = $massaInicial;
$segundos = 0;
do {
    $massa2 /= 2;
    $segundos += 50;
} while ($massa2 >= 0.5);

$horas = intdiv($segundos, 3600);
$segundos %= 3600;
$minutos = intdiv($segundos, 60);
$segundos %= 60;
printf("A massa inicial é de: $massaInicial " . "g<br>
        A massa final é de: %.2f" . "g.<br>
        O tempo total foi de $horas horas, $minutos minutos, $segundos segundos.<br>", $massa2);

endCard();
endColumn();

initColumn();
initCard();
echo "FOR<br>";
$massa3 = $massaInicial;
$segundos = 0;
for ($i = 0.5; $massa3 >= $i; ) {
    $massa3 /= 2;
    $segundos += 50;
}
$horas = intdiv($segundos, 3600);
$segundos %= 3600;
$minutos = intdiv($segundos, 60);
$segundos %= 60;
printf("A massa inicial é de: $massaInicial " . "g<br>
        A massa final é de: %.2f" . "g.<br>
        O tempo total foi de $horas horas, $minutos minutos, $segundos segundos.<br>", $massa3);
endCard();
endColumn();
require("./content/fim.php");
?>