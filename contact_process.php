<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$host = 'localhost'; // Your database host
$dbname = 'orphan_management'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Validate the input
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Prepare the SQL statement
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Message sent successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error; // Show the error
        }
    } else {
        echo "All fields are required.";
    }
}

// Close the connection
$conn->close();
?>