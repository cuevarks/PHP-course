<?php
/**
 * Created by PhpStorm.
 * User: cindycuevas
 * Date: 2019-04-04
 * Time: 11:42
 */

if (isset($_POST['myInput'])) {
    $query = require 'core/bootstrap.php';
    $task = $_POST['myInput'];
    $query->insertValue('todos', $task);
}

elseif ($_POST['delete']) {

    $query = require 'core/bootstrap.php';
    $id = $_POST['delete'];
    $query->delete_id('todos', $id);
}

elseif ($_POST['check']) {

    $query = require 'core/bootstrap.php';
    $id = $_POST['check'];
    $query->check_id('todos', $id);
}