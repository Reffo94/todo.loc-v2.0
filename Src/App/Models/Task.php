<?php

namespace Src\App\Models;

use Src\Db;
class Task
{
    public $id;
    public $name;
    public $description;
    public $createdat;
    public $userid;
    private $db;
    private $templateName;
    public $tableName;

    public function __construct(string $templateName)
    {
        // parent::__construct() 

        
       $this->db = new Db();
       $this->templateName = $templateName;
       $this->tableName = '`tasks`';
    }

    public function chooseMethod() 
    {
        $method = 'reading';
        return $method;
    }

    public function reading() {
        $sql = "SELECT * FROM " . $this->tableName .";";
        $tasks = $this->db->query($sql);
        return $tasks;
    }    
}