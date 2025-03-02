<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");

// Fetch all products that belong to the "Chains" category
$result = $conn->query("
    SELECT products.*, categories.category_name 
    FROM products 
    JOIN categories ON products.category_id = categories.category_id 
    WHERE categories.category_name = 'Chains'
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./jwelry-website/assets/css/chains.css">
    <title>Chains Collection</title>
    <style>
       
    </style>
</head>
<body>
<?php
include '../includes/header.php';
?>
<div class="container">
    <h2>Chains Collection</h2>
    <div class="grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= str_replace('./', '/jwelery-website/admin/', $row['image_url']); ?>" alt="Chain">
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
