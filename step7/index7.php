<?php

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'John';

die(var_dump($person));
require './index.view2.php';