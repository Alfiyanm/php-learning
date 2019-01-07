<?php

require 'functions2.php';

require 'database/Connection.php';

require 'Task.php';

$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';