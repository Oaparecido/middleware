<?php


namespace DB;

use PDO;
use Exception;

class Connection
{
    public function connect(): PDO
    {
        try {
            $pdo = new PDO("mysql:host=" . Config::MYSQL_HOST . ";dbname=" . Config::MYSQL_DATABASE . ";port=" . Config::MYSQL_PORT, Config::MYSQL_USER, Config::MYSQL_PASSWORD);
        } catch(Exception $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        }

        return $pdo;
    }
}