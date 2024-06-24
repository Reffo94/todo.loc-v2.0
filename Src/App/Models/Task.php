<?php

namespace Src\App\Models;

class Task extends CrudModel
{
    public $id;
    public $name;
    public $description;
    public $createdat;
    public $userid;
    public $templateName;
    public $tableName;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = '`tasks`';
    }
}