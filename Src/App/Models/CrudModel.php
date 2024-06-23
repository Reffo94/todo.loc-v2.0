<?php

namespace Src\App\Models;
use Src\Db;
class CrudModel
{
    protected $db;
    protected $templateName;
    protected function __construct(string $templateName)
    {
        $this->db = new Db();
        $this->templateName = $templateName;
    }

    protected function chooseMethod() 
    {
        $method = 'reading';
        return $method;
    }

    protected function reading() {
        $sql = "SELECT * FROM " . '??????' .";";
        $tasks = $this->db->query($sql);
        return $tasks;
    } 
}