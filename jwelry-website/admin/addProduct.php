<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category_id = $_POST['category_id'];
    $image = $_FILES['image']['name'];

    // Dynamically get the base URL
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . $host . "/jweleryWebsite/jwelry-website/admin/";

    // Upload directory
    $targetDir = "uploads/";
    $uploadPath = "../admin/" . $targetDir; // Corrected path for file upload

    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $targetFile = $targetDir . basename($image);
    $fullUploadPath = $uploadPath . basename($image);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $fullUploadPath)) {
        $conn = new mysqli("localhost", "root", "", "sinjhini_db");

        // Store full image URL
        $imagePath = $baseUrl . $targetFile;

        $sql = "INSERT INTO products (name, price, stock_quantity, category_id, image_url, created_at) 
                VALUES ('$name', '$price', '$stock_quantity', '$category_id', '$imagePath', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Product added successfully!');
                    window.location.href = '../pages/all-products.php';
                  </script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }

        $conn->close();
    } else {
        echo "<script>alert('Failed to upload image.');</script>";
    }
}
?>
