<?php

namespace Src\App\Controllers;

use Src\App\Views\View;
use Src\App\Models\Task;

class MainController
{
    private $view;
    private $task;
    public function __construct($templateName)
    {
        $this->view = new View($templateName);
        $this->task = new Task($templateName);

    }

    public function main(string $templateName)
    {
        $method = $this->task->chooseMethod();
        $tasks = $this->task->$method();
        $this->view->renderPage($templateName, ['tasks' => $tasks]);
    }      

    public function pageNotFound()
    {
        require_once __DIR__ . '/../../templates/404.php';
    }
}

