<?php
session_start();
include 'config.php';

$user_id = $_SESSION['user_id'];
if (!$user_id) {
    echo json_encode([]);
    exit();
}

$sql = "SELECT products.id, products.name, products.image, products.price 
        FROM wishlist 
        JOIN products ON wishlist.product_id = products.id 
        WHERE wishlist.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$wishlistItems = [];
while ($row = $result->fetch_assoc()) {
    $wishlistItems[] = $row;
}

echo json_encode($wishlistItems);
?>
