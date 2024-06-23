<?php

namespace Src;

use PDO;

class Db
{
    private $pdo;

    public function __construct() {
        $dataBaseConfig = require_once __DIR__ . '/configs/dbconfig.php';
        $this->pdo = new PDO('mysql:host=' . $dataBaseConfig['host'] . ';dbname=' . $dataBaseConfig['dbname'], $dataBaseConfig['user'],$dataBaseConfig['password']);
    }

    public function query(string $sql, array $sqlParams = [])
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($sqlParams);

        if (!$result) {
            return null;
        }

        return $sth->fetchAll(PDO::FETCH_OBJ);
    }
}