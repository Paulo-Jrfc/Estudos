<?php
require ('constants.php');
class HomeController {
    public function index() {
        $titulo = "Bom Demais - Home";
        include(SRC . 'utils/functions.php');
        include(VIEWS . 'templates/header.php');
        include(VIEWS . 'templates/navbar.php');
        include(VIEWS . 'home/index.php');
        include(VIEWS . 'templates/footer.php');
        include(VIEWS . 'templates/fim.php');
    }
}
?>