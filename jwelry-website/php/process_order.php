<?php
include "config.php"; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $payment_method = $_POST['payment_method'];
    $total_price = $_POST['total_price'];

    // Insert order into database
    $query = "INSERT INTO orders (name, email, address, phone, payment_method, total_price, status) 
              VALUES ('$name', '$email', '$address', '$phone', '$payment_method', '$total_price', 'Pending')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Order placed successfully!'); window.location.href='thank_you.html';</script>";
    } else {
        echo "<script>alert('Order failed!'); window.history.back();</script>";
    }
}
?>
