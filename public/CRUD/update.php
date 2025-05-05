<?php
require_once '../src/DBConnect.php';

function update($table, $data, $condition) {
    global $connection;

    $updates = [];
    foreach ($data as $column => $value) {
        $updates[] = "$column = :$column";
    }
    $updates_str = implode(", ", $updates);
    $query = "UPDATE $table SET $updates_str WHERE $condition";

    $stmt = $connection->prepare($query);

    try {
        return $stmt->execute($data);
    } catch (PDOException $error) {
        die("Update failed: " . $error->getMessage());
    }
}
?>