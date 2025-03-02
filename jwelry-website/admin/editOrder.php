<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];

    $sql = "UPDATE orders SET status = '$status' WHERE order_id = $order_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Order status updated successfully!');
                window.location.href = 'orders.php';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $order = $conn->query("SELECT * FROM orders WHERE order_id = $order_id")->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
</head>
<body>
    <h2>Edit Order Status</h2>
    <form method="POST">
        <input type="hidden" name="order_id" value="<?= $order['order_id']; ?>">
        
        <label>Order Status:</label>
        <select name="status">
            <option value="Pending" <?= ($order['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
            <option value="Processing" <?= ($order['status'] == 'Processing') ? 'selected' : ''; ?>>Processing</option>
            <option value="Shipped" <?= ($order['status'] == 'Shipped') ? 'selected' : ''; ?>>Shipped</option>
            <option value="Delivered" <?= ($order['status'] == 'Delivered') ? 'selected' : ''; ?>>Delivered</option>
            <option value="Cancelled" <?= ($order['status'] == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
        </select>

        <button type="submit">Update</button>
    </form>
</body>
</html>
