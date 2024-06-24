<?php

namespace Src\App\Models;
use Src\Db;
class CrudModel
{
    protected $db;
    protected $templateName;
    protected $tableName;
    protected function __construct()
    {
        $this->db = new Db();
    }
    public function chooseMethod() 
    {
        $method = 'reading';
        return $method;
    }
    public function reading(string $tableName) {
        $sql = "SELECT * FROM " . $tableName .";";
        $content = $this->db->query($sql);
        return $content;
    }

    // public function writing()
    // {
    //     $sql = "INSERT INTO " . $tableName . "(`name`, `description`) VALUES "
    // }
}