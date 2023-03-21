<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'inventario';

    try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
    die('Coneccion fallida: ' . $e->getMessage());
    }
?>