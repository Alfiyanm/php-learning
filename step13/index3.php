<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning', '(username)', '(password)');
} catch (PDOException $e) {
    die ('Could not connect.');
}

$pdo->prepare('select * from php-learning');

// this code when execute is not showing any thing

require 'index.view.php';