<?php


namespace Models;


use Exception;
use Helpers\DBHelper;

class User
{
    /**
     * @param array $fields
     * @return bool
     * @throws Exception
     */
    public static function create(array $fields): bool
    {
        $pdo = DBHelper::up();

        $sql = "CREATE IF NOT EXISTS users (
                id integer primary key auto_increment,
                name varchar(100) not null,
                email varchar(100) not null,
                birth_date date not null,
                age integer not null,
                )";

        try {
            $pdo->exec($sql);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        }

        $sql = "INSERT INTO users (name, email, birth_date, age) VALUES (:name, :email, :birth_date, :age)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $fields['name']);
        $stmt->bindParam(':email', $fields['email']);
        $stmt->bindParam(':birth_date', $fields['birth_date']);
        $stmt->bindParam(':age', $fields['age']);
        return $stmt->execute();
    }
}