<?php

// Connecting to the database
require "db.php";

// Get the task ID from the URL
$id = intval($_GET["id"] ?? 0);

// Delete the task if the ID is valid
if ($id > 0) {
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

// Return to the task list
header("Location: index.php");
exit;