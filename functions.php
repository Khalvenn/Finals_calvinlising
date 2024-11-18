<?php
// Database connection configuration
$host = 'localhost'; // Change if your database is hosted on a different server
$username = 'your_username'; // Replace with your MySQL username
$password = 'your_password'; // Replace with your MySQL password
$dbname = 'dct_ccs'; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
