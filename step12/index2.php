<?php

require 'functions.php';

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

dd($task);


//require 'view.index.php';