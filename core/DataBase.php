<?php

class DataBase
{
    private static $instance = null;

    public static function getInstance()
    {
        $host = 'localhost';
        $port = 3306;
        $db = 'bd_lab08';
        $user = 'root';
        $pass = '753159852';

        if (!self::$instance) {
            try {
                $dsn = "mysql:host=$host; port=$port; dbname=$db; charset=utf8";
                self::$instance = new PDO($dsn, $user, $pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database conexion fallida: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}