<?php
$servername = "localhost"; 
$username = "root";  // Change if you have a different username
$password = "";      // Add password if set
$dbname = "sinjhinidatabase"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'sinjhinidatabase');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];
    
    $imagePath = 'uploads/' . basename($_FILES['productImage']['name']);
    move_uploaded_file($_FILES['productImage']['tmp_name'], $imagePath);

    $sql = "INSERT INTO products (name, price, description, image) VALUES ('$productName', '$productPrice', '$productDescription', '$imagePath')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product Added Successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}



