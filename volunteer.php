<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Handle Volunteer Application
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $aadhar = $_POST['aadhar'];
    $education = $_POST['education'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO volunteers (name, email, mobile, address, aadhar, education) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $mobile, $address, $aadhar, $education);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Application submission failed: ' . $stmt->error]);
    }
    $stmt->close();
}

$conn->close();
?>