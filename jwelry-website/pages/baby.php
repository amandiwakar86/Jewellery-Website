<?php
include '../includes/config.php'; // Ensure config.php contains the database connection

// Database connection (Remove if config.php already connects)
$conn = new mysqli("localhost", "root", "", "sinjhini_db");

// Check connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all earrings
$sql = "SELECT products.*, categories.category_name 
        FROM products 
        JOIN categories ON products.category_id = categories.category_id 
        WHERE LOWER(categories.category_name) = 'Baby'"; // Case-insensitive search
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
    <title>Earrings Collection</title>
    <style>
        .container {
            max-width: 1300px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 10px;
        }
        .product-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }
        .product-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product-card p {
            font-size: 16px;
            color: #555;
        }
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
</head>
<body>
<?php include '../includes/header.php'; ?>
<section class="Anklet-display">

</section>
<div class="container">
    <h2>Baby Collection</h2>
    <div class="grid">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="product-card">
                    <img src="<?= $baseUrl . 'uploads/' . basename($row['image_url']); ?>" 
                         onerror="this.onerror=null; this.src='<?= $baseUrl . 'uploads/default.jpg'; ?>';"
                         alt="Earring Image">
                    <h3><?= htmlspecialchars($row['name']); ?></h3>
                    <p>Price: ₹<?= number_format($row['price'], 2); ?></p>
                    <p>Stock: <?= (int)$row['stock_quantity']; ?> left</p>
                    <a href="checkout.php?product_id=<?= $row['product_id']; ?>" class="btn">View Details</a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p style="text-align: center; color: red;">No earrings available.</p>
        <?php endif; ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
