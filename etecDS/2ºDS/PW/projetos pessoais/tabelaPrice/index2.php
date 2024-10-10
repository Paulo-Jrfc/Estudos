<?php
function coisa($msg, ...$params) {
    echo sprintf("$msg", ...$params);
}

coisa ("O número é de: %.2f %.2f %.2f", 5.666, 78.999, 65.789);

?>