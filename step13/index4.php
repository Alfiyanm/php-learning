<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning', '(username)', '(password)');
} catch (PDOException $e) {
    die ('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

var_dump($statement->fetchAll());

require 'index.view.php';