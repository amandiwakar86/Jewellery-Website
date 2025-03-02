<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");

// Fetch products suitable for gifting (you can filter by category or manually mark products as "gift ideas")
$result = $conn->query("
    SELECT p.*, c.category_name 
    FROM products p
    JOIN categories c ON p.category_id = c.category_id
    WHERE c.category_name IN ('Rings', 'Bracelets', 'Necklaces', 'Earrings')
    ORDER BY RAND() 
    LIMIT 12
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Ideas</title>
    <style>
        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            background: #ff9800;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background: #e68900;
        }
    </style>
</head>
<body>
<?php
include '../includes/header.php';
?>
<div class="container">
    <h2>Perfect Gift Ideas 🎁</h2>
    <p style="text-align: center; font-size: 16px; color: #555;">
        Looking for the perfect gift? Explore our collection of beautiful rings, earrings, bracelets, and necklaces!
    </p>
    <div class="grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= str_replace('./', '/jwelery-website/admin/', $row['image_url']); ?>" alt="Gift Idea">
                <h3><?= $row['name']; ?></h3>
                <p>Category: <?= $row['category_name']; ?></p>
                <p>Price: ₹<?= number_format($row['price'], 2); ?></p>
                <a href="productDetail.php?id=<?= $row['product_id']; ?>" class="btn">View Details</a>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php
include '../includes/footer.php';
?>
</body>
</html>
