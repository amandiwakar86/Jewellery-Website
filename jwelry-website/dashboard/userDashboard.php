<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/user_dash_board.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
    <script defer src="script.js"></script>
   <!-- For AOS Animation -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <title>User Dashboard</title>
</head>
<!-- <style>
    body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-family: Arial, sans-serif;
} -->
</style>
<body>
<?php
include '../includes/header.php'; 
?>
<div class="dashboard">
        <nav class="sidebar">
            <h2>Silver Shop</h2>
            <ul>
                <li><a href="./user-profile.php">Profile</a></li>
                <li><a href="./user_orders.php">Orders</a></li>
                <li><a href="./wishlist.php">Wishlist</a></li>
                <li><a href="#settings">Settings</a></li>
                <li><a href="../userAuthentication/logout.php">Logout</a></li>
            </ul>
        </nav>
        <main class="content">
            <section id="profile" class="content-text">
                <h2>Welcome, User!</h2>
                <p>Email: user@example.com</p>
                <p>Member since: January 2024</p>
            </section>
            <section id="orders" class="content-text">
                <h2>Order History</h2>
                <ul id="order-list"></ul>
            </section>
            <section id="wishlist" class="content-text">
                <h2>Wishlist</h2>
                <ul id="wishlist-items"></ul>
            </section>
        </main>
</div> 
    
    <?php
include '../includes/footer.php'; 
?>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const orders = ["Silver Ring - $50", "Silver Necklace - $120"];
            const wishlist = ["Silver Bracelet", "Silver Earrings"];

            const orderList = document.getElementById("order-list");
            orders.forEach(order => {
                const li = document.createElement("li");
                li.textContent = order;
                orderList.appendChild(li);
            });

            const wishlistItems = document.getElementById("wishlist-items");
            wishlist.forEach(item => {
                const li = document.createElement("li");
                li.textContent = item;
                wishlistItems.appendChild(li);
            });
        });
    </script>
</body>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>