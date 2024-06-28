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

    public function registration(string $tableName, string $columns, array $values)
    {
        if (isset($_POST['submit'])) {
            if (!empty($_POST['email'] && !empty($_POST['password']))) {
                $email = trim($_POST['email']);
                $password = md5(trim($_POST['password']) . 'soltedhash');
            }
            parent::writing($this->tableName, $this->columns, [$email, $password, $this->generateAuthtoken()]);
            header('location: http://todo.loc/registration');
        } 
    }

    public function generateAuthtoken($length = 25)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

}