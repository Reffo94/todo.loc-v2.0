<?php
use Src\App\Controllers\MainController;
use src\Router;


spl_autoload_register(function ($classname){
    require_once __DIR__ . '\\' . $classname . '.php';
});

require_once __DIR__ . '/functions.php';

$router = new Router();

dump($_POST);

dump($router);


$controller = new MainController($router->templateName, $router->className);
if ($router->isRouteFound) {
    $controller->main();
} else {
    $controller->pageNotFound();
}

