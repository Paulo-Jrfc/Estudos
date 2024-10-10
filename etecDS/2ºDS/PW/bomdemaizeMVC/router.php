<?php // router.php
define('URL_BASE', '/bomdemaizeMVC/');

$url = $_SERVER['REQUEST_URI'];

// Remove a parte da URL após o ponto de interrogação (query string)
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
        require __DIR__ . '/src/controller/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case '/produtos':
        require __DIR__ . '/src/controller/ProdutoController.php';
        $controller = new ProdutoController();
        $controller->index();
        break;

    case '/login':
        require __DIR__ . '/src/controller/LoginController.php';
        $controller = new LoginController();
        $controller->index();
        break;

    case '/encerrar':
        session_start();
        $_SESSION = array();
        session_destroy();
        header('location: http://localhost:8092/');
        break;

    case '/listaProdutos':
        require __DIR__ . '/json/listaProdutos.json';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
/*
// Define um array de rotas
$routes = [
    URL_BASE => ['controller' => 'HomeController', 'action' => 'index'],
    '/pagina1' => ['controller' => 'Pagina1Controller', 'action' => 'index'],
    '/pagina2' => ['controller' => 'Pagina2Controller', 'action' => 'index'],
    '/bomdemaizeMVC/login' => ['controller' => 'LoginController', 'action' => 'index'], // Rota para a página de login
    // Adicione outras rotas conforme necessário
];

// Verifica se a rota solicitada existe no array de rotas
if (array_key_exists($url, $routes)) {
    $route = $routes[$url];
    // Obtém o controlador e a ação da rota
    $controller = $route['controller'];
    $action = $route['action'];
    // Inclui o arquivo do controlador
    include 'src/controller/' . $controller . '.php';

    // Cria uma instância do controlador
    $instance = new $controller();

    // Chama a ação no controlador
    $instance->$action();
} else {
    // Página não encontrada (404)
    //include 'views/404.php';
}

switch ($url) {
    case URL_BASE:
        include('./public/index.php');

        break;
    case URL_BASE . "login/":
        include("../login.php");
        break;*/
?>