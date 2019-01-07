<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning', 'test', '1234');
} catch (PDOException $e) {
    die ('Could not connect.');
}

$pdo->prepare('select * from todos');

// this code when execute is not showing any thing

require 'index.view.php';