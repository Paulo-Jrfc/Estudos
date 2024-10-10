<?php
    require (__DIR__ . '/src/view/templates/protectedPages.php');
    $_SESSION['carrinho'] = array();
    header("Location: /carrinho");
?>