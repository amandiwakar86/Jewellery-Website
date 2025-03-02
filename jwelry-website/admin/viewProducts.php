<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");
$result = $conn->query("SELECT products.*, categories.category_name 
                        FROM products 
                        JOIN categories ON products.category_id = categories.category_id");



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
    <title>View Products</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            width: 50px;
            height: auto;
            border-radius: 5px;
        }
        a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }
        a:hover {
            color: red;
        }
    </style>
</head>
<body>

    <h2>All Products</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price (₹)</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['product_id']; ?></td>
                <td>
                <img src="<?php echo $baseUrl . 'uploads/' . basename($row['image_url']); ?>" 
            onerror="this.onerror=null; this.src='<?php echo $baseUrl . 'uploads/default.jpg'; ?>';" 
            alt="Product Image"> 
                </td>
                <td><?= htmlspecialchars($row['name']); ?></td>
                <td><?= htmlspecialchars($row['category_name']); ?></td>
                <td>₹<?= number_format($row['price'], 2); ?></td>
                <td><?= $row['stock_quantity']; ?></td>
                <td>
                    <a href="editProduct.php?id=<?= $row['product_id']; ?>">Edit</a> |
                    <a href="delete_products.php?id=<?= $row['product_id']; ?>" 
                       onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>

</body>
</html>
