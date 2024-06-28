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
        if (empty($_GET['route'])) {
            $method = 'reading';
        } else {
            switch ($_GET['route']) {
                case 'add':
                    $method = 'writing';
                    break;
                case 'delete':
                    $method = 'deleting';
                    break;
                case 'edit':
                    $method = 'updating';
                    break;
                case 'login':
                    $method = 'reading';
                    break;
                case 'logout':
                    $method = 'deleting';
                    break;
                case 'registration':
                    $method = 'writing';
                    break;
            }
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
        $sql = "INSERT INTO " . $tableName . $columns . " VALUES ";
        $this->db->query($sql);
    }
}