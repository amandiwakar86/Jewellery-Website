<?php
include '../includes/config.php';

if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']); // Ensures safe integer input

    $conn = new mysqli("localhost", "root", "", "sinjhini_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the delete query
    $stmt = $conn->prepare("DELETE FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Product deleted successfully!');
                window.location.href = './viewProducts.php';
              </script>";
    } else {
        echo "<script>alert('Error deleting product: " . $conn->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
