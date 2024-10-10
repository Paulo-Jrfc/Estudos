<?php // router.php
$url = $_SERVER['REQUEST_URI'];
$url = strtok($url, '?');
switch ($url) {
    case '/':
        header('Location: /home');
        break;
    case '/index':
        case '/index.php':
            header('Location: /home');
            break;
    case '/home':
        require __DIR__ . '/src/view/home/index.php';
        break;
    case '/produtos':
        require __DIR__ . '/src/view/produtos/index.php';
        break;
    case '/produto':
        require __DIR__ . '/src/view/descricao/index.php';
        break;
    case '/login':
        require __DIR__ . '/src/view/login/index.php';
        break;
    case '/carrinho':
        require __DIR__ . '/src/view/carrinho/index.php';
        break;
    case '/encerrar':
        session_start();
        $_SESSION = array();
        session_destroy();
        header('location: /');
        break;
    case '/esvaziarCarrinho':
        require __DIR__ . '/esvaziarCarrinho.php';
        break;
    case '/401':
        require __DIR__ . '/src/view/401.php';
        break;
    case '/404':
        require __DIR__ . '/src/view/404.php';
        break;
    default:
    break;
}
if (http_response_code() == 404){
    require __DIR__ . '/src/view/404.php';
}
?>