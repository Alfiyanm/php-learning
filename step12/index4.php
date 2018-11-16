<?php

require 'functions.php';

class Task {

    protected $description;

    protected $completed = true;

    public function __construct($description)
    {
        // Automaticaly triggered on instantiation
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$task = new Task('Go to the store');

$task->complete();

var_dump($task->isComplete());

require 'view.index.php';