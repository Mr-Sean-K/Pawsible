<?php

require_once '../src/DBConnect.php';
require_once '../src/common.php';
function create($table, $data) {
    global $connection;

    $columns = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));
    $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmt = $connection->prepare($query);

    try {
        return $stmt->execute($data);
    } catch (PDOException $error) {
        die("Insert failed: " . $error->getMessage());
    }
}