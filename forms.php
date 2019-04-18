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
//    echo 'Success!';
    echo "<script language='javascript'>
          window.location = 'index.php'
</script>";
}

elseif ($_POST['delete']) {
    $query = require 'core/bootstrap.php';
    $id = $_POST['id'];
    var_dump($id);
    die();
    $query->delete_id('todos', $id);
    echo "<script language='javascript'>
          window.location = 'index.php'
</script>";
}