<?php

require 'functions2.php';

require 'Task2.php';

$pdo = connectToDb();

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';