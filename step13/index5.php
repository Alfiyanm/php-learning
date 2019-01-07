<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning', 'test', '1234');
} catch (PDOException $e) {
    die ('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_OBJ));

require 'index.view.php';