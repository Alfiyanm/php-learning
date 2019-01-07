<?php

class Connection 
{
    public static function make()
    {
        try { // the best practice is allways use pdo to connect to the database
            return new PDO('mysql:host=127.0.0.1;dbname=php-learning', 'test', '1234');
        } catch (PDOException $e) {
            die ($e->getMessage());
        }    
    }
}
