<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$host = 'localhost';
$db = 'orphan_management';
$user = 'root'; // default for XAMPP
$pass = ''; // default for XAMPP

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sponsor_name = $_POST['sponsor_name'];
    $child_id = $_POST['child_id']; // Assume you have a way to get this
    $amount = $_POST['amount'];
    $package_name = $_POST['package_name']; // Optional: Store the package name

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO sponsorships (sponsor_name, child_id, amount, package_name, start_date, end_date) VALUES (?, ?, ?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 1 YEAR))");
    $stmt->bind_param("siis", $sponsor_name, $child_id, $amount, $package_name);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Sponsorship submission failed: ' . $stmt->error]);
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>