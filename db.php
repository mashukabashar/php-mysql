<?php
$host = "localhost";
$username = "root";
$password = "";  // default for XAMPP
$database = "mydb";  // your DB name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!-- http://localhost/student_form/index.html -->