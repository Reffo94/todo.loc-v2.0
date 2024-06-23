<?php

namespace Src;

class Router
{
    public $isRouteFound = false;

    public $templateName;

    public function __construct(){
        $routes = require_once __DIR__ . '/configs/routes.php';
        $route = $_GET['route'] ?? '';
        $routesKeys = array_keys($routes); 
        foreach ($routesKeys as $url) {
            preg_match($url, $route, $matches);
            if (!empty($matches)) {
                $this->isRouteFound = true;
                if ($matches[0] == '') {
                    $this->templateName = 'main';
                }else{
                    $this->templateName = $matches[0];
                }
                break;
            }
        }
    }
}




