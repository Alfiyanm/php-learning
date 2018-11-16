<?php

// require 'functions.php';

class Task {

    protected $description;

    protected $completed = false;

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

    public function description()
    {
        return $this->description; // return value to protected property
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];


require './index.view2.php'; // part of index.view2.php