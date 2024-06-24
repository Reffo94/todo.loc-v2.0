<?php

namespace Src\App\Models;
class User extends CrudModel
{
    public $id;
    public $email;
    public $password;
    public $authtoken;
    public $tableName;

    public function __construct(string $templateName)
    {
        parent::__construct($templateName);
        $this->tableName = '`users`';
    }

}