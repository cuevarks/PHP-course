<?php
/**
 * Created by PhpStorm.
 * User: Cuevas
 * Date: 2019-03-12
 * Time: 12:07
 */

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('SELECT * FROM todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}