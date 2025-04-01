<?php
include '../includes/config.php'; // Ensure this file contains a working database connection

// Database connection (if not included in config.php)
$conn = new mysqli("localhost", "root", "", "sinjhini_db");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Dynamically get the base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . $host . "/jweleryWebsite/jwelry-website/admin/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/all_products.css">
    <title>All Products Shop</title>
</head>
<style>
      .btn {
            display: inline-block;
            padding: 8px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background: #0056b3;
        }
</style>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- All Products -->
    <div class="product-container">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="product-card">
                    <img src="<?php echo $baseUrl . 'uploads/' . basename($row['image_url']); ?>" 
                         onerror="this.onerror=null; this.src='<?php echo $baseUrl . 'uploads/default.jpg'; ?>';" 
                         alt="Product Image">
                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <p class="product-price">Price: ₹<?php echo number_format($row['price'], 2); ?></p>
                    <a href="checkout.php?product_id=<?= $row['product_id']; ?>" class="btn">View Details</a>
                    </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No products available.</p>
        <?php endif; ?>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>

<script>
    function addToWishlist(productId) {
        fetch('add_to_wishlist.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ product_id: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) alert("Added to Wishlist!");
            else alert("Failed to add.");
        });
    }
</script>

</html>

