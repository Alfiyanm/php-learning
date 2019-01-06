<?php

// require 'functions.php';

class Task {

    public $description;

    public $completed = false;

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

$tasks = [
    new Task('Go to the store'), // 0
    new Task('Finish my screencast'), // 1
    new Task('Clean my room') // 2
];

$tasks[0]->complete(); // array number 0 is correct

require './index.view4.php';