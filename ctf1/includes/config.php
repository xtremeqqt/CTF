<?php
$servername = "localhost";
$username = "root";
$password = "cb4fec89febd42e9e1f8ed8bfcf489b107ab96e83c1256b7";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 