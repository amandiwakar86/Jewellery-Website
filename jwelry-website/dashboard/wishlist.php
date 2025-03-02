<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .wishlist-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.wishlist-item {
    width: 200px;
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}
.wishlist-item img {
    width: 100%;
    height: auto;
}
.remove-btn {
    background: red;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

</style>
<body>
    <h2>Your Wishlist</h2>
    <div class="wishlist-container" id="wishlistItems"></div>

    <script>
        // Fetch Wishlist Items from Database
        function loadWishlist() {
            fetch('fetch_wishlist.php')
                .then(response => response.json())
                .then(data => {
                    let wishlistContainer = document.getElementById("wishlistItems");
                    wishlistContainer.innerHTML = "";
                    
                    if (data.length === 0) {
                        wishlistContainer.innerHTML = "<p>Your wishlist is empty.</p>";
                        return;
                    }

                    data.forEach(item => {
                        let itemDiv = document.createElement("div");
                        itemDiv.classList.add("wishlist-item");
                        itemDiv.innerHTML = `
                            <img src="uploads/${item.image}" alt="${item.name}">
                            <h3>${item.name}</h3>
                            <p>₹${item.price}</p>
                            <button class="remove-btn" onclick="removeFromWishlist(${item.id})">Remove</button>
                        `;
                        wishlistContainer.appendChild(itemDiv);
                    });
                });
        }

        // Remove item from Wishlist
        function removeFromWishlist(productId) {
            fetch('remove_from_wishlist.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) loadWishlist();
                else alert("Failed to remove item.");
            });
        }

        // Load Wishlist on Page Load
        document.addEventListener("DOMContentLoaded", loadWishlist);
    </script>
</body>
</html>
