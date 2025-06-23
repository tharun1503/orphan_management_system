<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'orphan_management'); // Use 'root' and empty password

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the username and password
$username = 'admin';
$password = 'Tharun123'; // Set the desired password

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Delete existing admin user if it exists
$sql_delete = "DELETE FROM admins WHERE username = ?";
$stmt_delete = $conn->prepare($sql_delete);
$stmt_delete->bind_param("s", $username);
$stmt_delete->execute();
$stmt_delete->close();

// Insert the admin user with the hashed password
$sql_insert = "INSERT INTO admins (username, password) VALUES (?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("ss", $username, $hashed_password);
$stmt_insert->execute();

echo "Admin user created successfully with username: $username and password: $password";

$stmt_insert->close();
$conn->close();
?>