<?php

class Task {

    protected $description;

    protected $completed = false;

    public function __construct($description)
    {
        // Automaticaly triggered on instantiation
        $this->description = $description;
    }
}

$task = new Task('Go to the store');

var_dump($task);


// require 'view.index.php';