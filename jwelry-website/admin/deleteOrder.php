<?php
include '../includes/config.php';

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "sinjhini_db");
    $sql = "DELETE FROM orders WHERE order_id = $order_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Order deleted successfully!');
                window.location.href = 'orders.php';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
