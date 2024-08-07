<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "speech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    http_response_code(500); // Internal Server Error
    echo "Connection failed: " . $conn->connect_error;
    exit;
}

// Check if 'transcript' is provided in POST request
if (!isset($_POST['transcript'])) {
    http_response_code(400); // Bad Request
    echo "Error: No transcript provided.";
    exit;
}

$transcript = $_POST['transcript'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO user_input (input_text) VALUES (?)");
if ($stmt === false) {
    http_response_code(500); // Internal Server Error
    echo "Prepare failed: " . $conn->error;
    exit;
}
$stmt->bind_param("s", $transcript);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    http_response_code(500); // Internal Server Error
    echo "Execute failed: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
