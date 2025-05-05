<?php
require_once '../src/DBConnect.php';

function delete($table, $condition, $params = []) {
    global $connection;

    $query = "DELETE FROM $table WHERE $condition";
    $stmt = $connection->prepare($query);

    try {
        return $stmt->execute($params);
    } catch (PDOException $error) {
        die("Delete failed: " . $error->getMessage());
    }
}
?>