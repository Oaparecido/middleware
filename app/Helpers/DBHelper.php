<?php


namespace Helpers;


use DB\Connection;
use Exception;
use PDO;

class DBHelper
{

    public static function up(): PDO
    {
        try {
            return (new Connection())->connect();
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        }
    }
}