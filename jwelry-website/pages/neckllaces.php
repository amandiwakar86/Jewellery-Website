<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");

// Fetch all products that belong to the "Necklaces" category
$result = $conn->query("
    SELECT products.*, categories.category_name 
    FROM products 
    JOIN categories ON products.category_id = categories.category_id 
    WHERE categories.category_name = 'Necklaces'
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necklaces Collection</title>
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
<?php
include '../includes/header.php';
?>
<div class="container">
    <h2>Necklaces Collection</h2>
    <div class="grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= str_replace('./', '/jwelery-website/admin/', $row['image_url']); ?>" alt="Necklace">
                <h3><?= $row['name']; ?></h3>
                <p>Price: ₹<?= number_format($row['price'], 2); ?></p>
                <p>Stock: <?= $row['stock_quantity']; ?> left</p>
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
