<?php

class Task{

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

}

$tasks = [new Task('Do homework'),
        new Task('Watch courses')];


require 'index.view.php';