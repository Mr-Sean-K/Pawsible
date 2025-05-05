<?php

$host = "127.0.0.1";
$username = "root";
$password = "Bagels12";
$dbname = "pawsible";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
?>