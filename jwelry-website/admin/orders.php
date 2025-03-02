<?php
include '../includes/config.php';

// Fetch all orders
$conn = new mysqli("localhost", "root", "", "sinjhini_db");
$result = $conn->query("
    SELECT orders.*, users.name AS user_name 
    FROM orders 
    JOIN users ON orders.user_id = users.user_id
    ORDER BY orders.created_at DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 900px;
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .status-pending { color: orange; }
        .status-processing { color: blue; }
        .status-shipped { color: purple; }
        .status-delivered { color: green; }
        .status-cancelled { color: red; }
        .btn {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        .btn-edit { background: #007bff; }
        .btn-delete { background: #dc3545; }
        .btn:hover { opacity: 0.8; }
    </style>
</head>
<body>

<div class="container">
    <h2>Manage Orders</h2>
    <table>
        <tr>
            <th>Order ID</th>
            <th>User</th>
            <th>Total (₹)</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['order_id']; ?></td>
                <td><?= $row['user_name']; ?></td>
                <td>₹<?= number_format($row['total_amount'], 2); ?></td>
                <td class="status-<?= strtolower($row['status']); ?>"><?= $row['status']; ?></td>
                <td><?= $row['created_at']; ?></td>
                <td>
                    <a href="editOrder.php?id=<?= $row['order_id']; ?>" class="btn btn-edit">Edit</a>
                    <a href="deleteOrder.php?id=<?= $row['order_id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
