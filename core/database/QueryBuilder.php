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

    public function insertValue($table, $value)
    {
        $statement = $this->pdo->prepare("INSERT INTO {$table} (description, completed) VALUES (:task, FALSE )");
        $task_title = $value;
        $statement->bindParam(':task', $task_title);
        $statement->execute();
    }

    public function delete_id($table, $id)
    {
        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE id={$id}");
        $statement->execute();
    }

    public function check_id($table, $id)
    {
        $statement = $this->pdo->prepare("UPDATE {$table} SET completed = TRUE WHERE id = {$id}");
        $statement->execute();
    }
}