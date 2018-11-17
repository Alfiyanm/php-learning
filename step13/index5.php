<?php

try { // the best practice is allways use pdo to connect to the database
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning', '(username)', 'password');
} catch (PDOException $e) {
    die ('Could not connect.');
}

// $e is an object. it is an instance of PDOException class;


// mysql_connect() // this function is deprecated and we don't want to use 
// it can also allow for sql injection

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($result[0]->description);

require 'index.view.php';