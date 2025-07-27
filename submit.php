<?php
include 'db.php';

// Get form data and sanitize
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$date = $conn->real_escape_string($_POST['date']);

// Insert data into the database
$sql = "INSERT INTO studenttable (username, email, date) VALUES ('$username', '$email', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New student record created successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
