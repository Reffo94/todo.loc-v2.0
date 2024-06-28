<?php

namespace Src\App\Controllers;

use Src\App\Views\View;


class MainController
{
    private $view;
    private $className;
    private $templateName;
    private $class;
    public function __construct(string $templateName, string $className)
    {
        $this->templateName = $templateName;
        $this->className = $className;
        $this->view = new View($templateName);
        $this->class = new $className();

    }
    public function main()
    {
        $method = $this->class->chooseMethod();
        dump($this->class->chooseMethod());
        $content = $this->class->$method($this->class->tableName);
        $this->view->renderPage($this->templateName, ['content' => $content]);
    }      
    public function pageNotFound()
    {
        require_once __DIR__ . '/../../templates/404.php';
    }
}

