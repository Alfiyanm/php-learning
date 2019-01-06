<?php

require 'functions2.php';

require 'Task2.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';