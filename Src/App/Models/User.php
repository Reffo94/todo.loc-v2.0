<?php

namespace Src\App\Models;
class User extends CrudModel
{
    public $id;
    public $email;
    public $password;
    public $authtoken;
    public $tableName;
    protected $columns;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = '`users`';
        $this->columns = "(`email`, `password`, `authtoken`)";
    }

    // public function writing()
    // {
    //     parent::writing($this->tableName, $this->columns,[]);
    //     $columns = "(`email`, `password`, `authtoken`)";
    // }

}