<?php

$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';


//foreach ($tasks as $task) {
//    var_dump($task);
//}