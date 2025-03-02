<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category_id = $_POST['category_id'];

    $conn = new mysqli("localhost", "root", "", "sinjhini_db");

    // Fetch current product details
    $result = $conn->query("SELECT image_url FROM products WHERE product_id = $product_id");
    $product = $result->fetch_assoc();
    $image_url = $product['image_url'];

    // Handle image upload if a new file is selected
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "./uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $image_url = $targetFile; // Update image path
        }
    }

    // Update product details
    $sql = "UPDATE products 
            SET name = '$name', price = '$price', stock_quantity = '$stock_quantity', category_id = '$category_id', image_url = '$image_url' 
            WHERE product_id = $product_id";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully!";
        header("Location: v./iewProducts.php"); // Redirect back to product list
    } else {
        echo "Error updating product: " . $conn->error;
    }

    $conn->close();
}
?>
