<?php
/**
 * Created by PhpStorm.
 * User: Cuevas
 * Date: 2019-03-12
 * Time: 12:23
 */

class Task {

    public $description;
    public $completed;

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