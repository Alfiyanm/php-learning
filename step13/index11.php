<?php

require 'Task2.php';

try { // the best practice is allways use pdo to connect to the database
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning', '(username)', '(password)');
} catch (PDOException $e) {
    die ($e->getMessage());
}

// $e is an object. it is an instance of PDOException class;


// mysql_connect() // this function is deprecated and we don't want to use 
// it can also allow for sql injection

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

var_dump($tasks[0]->foobar());

require 'index.view.php';