<!-- Database Connection -->
<?php
$servername = "localhost"; // Change if your database is hosted remotely
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password (default is empty for XAMPP)
$database = "sinjhini_db"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
