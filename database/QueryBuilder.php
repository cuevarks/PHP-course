<?php
/**
 * Created by PhpStorm.
 * User: intellisys
 * Date: 2019-03-14
 * Time: 10:47
 */
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $class);

    }

    public function insertVaLue($table, $value)
    {
        $statement = $this->pdo->prepare("INSERT INTO {$table} (description, completed) VALUES ({$value}, FALSE");
        $statement->execute();
    }

    /*
    public function delete_id($pdo, $id)
    {
        $query = "DELETE FROM todo WHERE id = $id";

    }*/
}