<?php
use Src\App\Controllers\MainController;
use src\Router;

spl_autoload_register(function ($classname){
    require_once __DIR__ . '\\' . $classname . '.php';
});

require_once __DIR__ . '/functions.php';

$router = new Router();

$controller = new MainController($router->templateName);
if ($router->isRouteFound) {
    $controller->main($router->templateName);
} else {
    $controller->pageNotFound();
}
