<?php

namespace Src\App\Views;

class View
{
    private $templateName;
    public function __construct(string $templateName)
    {
        $this->templateName = $templateName;
    }
    public function renderPage(string $templateName, array $pageParams = []) {
        extract($pageParams);
        require_once __DIR__ . '/../../templates/' . $templateName . '.php';
    }
}