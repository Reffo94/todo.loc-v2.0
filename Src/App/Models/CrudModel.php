<?php

namespace Src\App\Models;
use Src\Db;
class CrudModel
{
    protected $db;
    protected $templateName;
    protected $tableName;
    protected function __construct(string $templateName)
    {
        $this->db = new Db();
        $this->templateName = $templateName;
    }
    public function chooseMethod() 
    {
        $method = 'reading';
        return $method;
    }
    public function reading(string $tableName) {
        $sql = "SELECT * FROM " . $tableName .";";
        $tasks = $this->db->query($sql);
        return $tasks;
    } 
}