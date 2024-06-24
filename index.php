<?php
use Src\App\Controllers\MainController;
use src\Router;
use Src\App\Models\Task;
use Src\App\Models\User;

spl_autoload_register(function ($classname){
    require_once __DIR__ . '\\' . $classname . '.php';
});

require_once __DIR__ . '/functions.php';

$router = new Router();

dump($router);


$controller = new MainController($router->templateName, $router->className);
if ($router->isRouteFound) {
    $controller->main();
} else {
    $controller->pageNotFound();
}

