<?php

// Connecting to my school database
$host = "localhost";
$db_user = "pierrette.oduro";
$db_pass = "YOUR_MYSQL_PASSWORD";
$db_name = "ecommerce_2026A_pierrette_oduro";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}