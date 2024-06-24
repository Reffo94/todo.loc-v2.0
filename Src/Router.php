<?php

namespace Src;

class Router
{
    public $isRouteFound = false;

    public $templateName;

    public $className;

    public function __construct(){
        $routes = require_once __DIR__ . '/configs/routes.php';
        $route = $_GET['route'] ?? '';
        $routesKeys = array_keys($routes);

        foreach ($routes as $url => $className) {
            preg_match($url, $route, $matches);
            if (!empty($matches)) {
                $this->isRouteFound = true;
                if ($matches[0] == '') {
                    $this->templateName = 'main';
                    $this->className = '\Src\App\Models\Task';
                    } else {
                    $this->templateName = $matches[0];
                    $this->className = $className;
                }
                break;
            }
        }
    }
}




