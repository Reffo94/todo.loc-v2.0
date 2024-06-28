<?php

namespace Src\App\Models;
use Src\Db;
class CrudModel
{
    protected $db;
    protected $tableName;
    protected function __construct()
    {
        $this->db = new Db();
    }
    public function chooseMethod(string $templateName) : string
    {
        if (empty($_GET['route'])) {
            $method = 'reading';
        } else {
            $method = $templateName; 
        }
        return $method;
    }
    public function reading(string $tableName) {
        $sql = "SELECT * FROM " . $tableName .";";
        $content = $this->db->query($sql);
        return $content;
    }

    public function writing(string $tableName, string $columns, array $values)
    {
        $sql = "INSERT INTO " . $tableName . $columns . " VALUES (?,?,?)";
        dump($sql);
        $this->db->query($sql, $values);
    }
}