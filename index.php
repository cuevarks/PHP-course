<?php

$query = require 'core/bootstrap.php';
require 'core/Task.php';

$tasks = $query->selectAll('todos', 'Task');
require 'index.view.php';
