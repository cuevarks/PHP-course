<?php

require 'functions.php';
require 'database/Connection.php';
require 'Task.php';

$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

var_dump($tasks[0]->isCompleted());
require 'index.view.php';