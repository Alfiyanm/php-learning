<?php

// require 'functions.php';

class Task {

    protected $description; // if it's execute, the result is error or not shown
    // because $description is protected

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
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];


require './index.view.php';

