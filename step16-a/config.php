<?php

return [
    'database' => [
        'name'          => 'php-learning',
        'username'      => 'test',
        'password'      => '1234',
        'connection'    => 'mysql:host=127.0.0.1',
        'options'       => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
    ];