<?php

class Conexion
{
    public static function conectar()
    {
        $host = "localhost";
        $username = "bd_lab08";
        $dbname = "natanael";
        $password = "natanael1234";
        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
        return $conn;
    }
}