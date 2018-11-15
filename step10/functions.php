<?php

function dd($animals) {
    echo '<pre>';
    die(var_dump($animals));
    echo '</pre>';
}