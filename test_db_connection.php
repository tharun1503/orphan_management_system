<?php
$conn = new mysqli('localhost', 'root', '', 'orphan_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$conn->close();
?>