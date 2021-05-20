<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_db = 'gmp';
$db_port = 8889;


try {
    $conn = new PDO("mysql:host=$db_host;dbname=gmp", $db_user);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
