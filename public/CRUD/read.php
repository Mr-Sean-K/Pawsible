<?php
function read($table, $conditions = []) {
    global $connection;

    $query = "SELECT * FROM $table";

    if (!empty($conditions)) {
        $whereClauses = [];
        foreach ($conditions as $column => $value) {
            $whereClauses[] = "$column = :$column";
        }
        $query .= " WHERE " . implode(" AND ", $whereClauses);
    }

    $stmt = $connection->prepare($query);

    try {
        $stmt->execute($conditions);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        die("Read failed: " . $error->getMessage());
    }
}
?>