<?php
include '../includes/config.php'; // Include your database connection file

$conn = new mysqli("localhost", "root", "", "sinjhini_db");
$sql = "SELECT * FROM products";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/all_products.css">
    <!-- For AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>All Products shop</title>

</head>

<body>
    <?php
include '../includes/header.php'; 
?>

    <!-- All Products -->
<div class="product-container">
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="product-card">
            <img src="<?php echo $baseUrl . 'uploads/' . basename($row['image_url']); ?>" 
            onerror="this.onerror=null; this.src='<?php echo $baseUrl . 'uploads/default.jpg'; ?>';" 
            alt="Product Image">
            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
            <p><?php echo htmlspecialchars($row['description']); ?></p>
            <p class="product-price">Price: ₹<?php echo number_format($row['price'], 2); ?></p>
        </div>
    <?php } ?>
</div>



    <?php
include '../includes/footer.php'; 
?>
</body>
<script>
    function displayProducts() {
        let productsContainer = document.getElementById("productsContainer");
        productsContainer.innerHTML = "";
        let products = JSON.parse(localStorage.getItem("products")) || [];

        products.forEach(product => {
            let productCard = document.createElement("div");
            productCard.classList.add("product-card");

            productCard.innerHTML = `
                <img src="${product.image}" alt="${product.name}" width="100">
                <h3>${product.name}</h3>
                <p>Price: $${product.price}</p>
                <p>${product.description}</p>
                <button class="wishlist-btn" onclick="addToWishlist(PRODUCT_ID)">Add to Wishlist</button>
            `;

            productsContainer.appendChild(productCard);
        });
    }

    window.onload = displayProducts;


    // For Searching 
    // Function to handle search when Enter is pressed
    function handleSearch(event) {
        if (event.key === "Enter") {
            const searchQuery = document.getElementById("search-box").value.trim().toLowerCase();
            if (searchQuery !== "") {
                window.location.href = `search.php?query=${encodeURIComponent(searchQuery)}`;
            }
        }
    }

    // add to wishlist
    function addToWishlist(productId) {
        fetch('add_to_wishlist.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ product_id: productId })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) alert("Added to Wishlist!");
                else alert("Failed to add.");
            });
    }
</script>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- Main JS -->
<script src="../assets/js/all-products.js"></script>
<script src="../assets/js/script.js"></script>

</html>