<?php
/**
 * Created by PhpStorm.
 * User: cindycuevas
 * Date: 2019-04-04
 * Time: 11:42
 */

if (isset($_POST['submit'])) {

    $query = require 'core/bootstrap.php';
    $task = $_POST['myInput'];
    $query->insertValue('todos', $task);
    echo "<script language='javascript'>
          window.location = 'index.php'
</script>";
}

elseif ($_POST['delete']) {
    echo 'delete';
    var_dump($_POST);
    die();
    $query = require 'core/bootstrap.php';
    $id = $_POST['delete'];
    $query->delete_id('todos', $id);
    echo "<script language='javascript'>
          window.location = 'index.php'
</script>";
}
elseif ($_POST['check']) {
    echo 'check';
    var_dump($_POST);
    die();
    $query = require 'core/bootstrap.php';
    $id = $_POST['check'];
    $query->check_id('todos', $id);
    echo "<script language='javascript'>
          window.location = 'index.php'
</script>";
}