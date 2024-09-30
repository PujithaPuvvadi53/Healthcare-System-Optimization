<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "21711A0568-DB";
$port = '3307'; // Replace with your MySQL port number if different

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

