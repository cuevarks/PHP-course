<?php
/**
 * Created by PhpStorm.
 * User: cindycuevas
 * Date: 2019-04-04
 * Time: 11:42
 */

if (isset($_POST['submit'])) {

    $query = require 'bootstrap.php';
    $task = $_POST['myInput'];
    $query->insertValue('todos', $task);
//    echo 'Success!';
    echo"<script language='javascript'>
          window.location = 'index.php'
</script>";
}