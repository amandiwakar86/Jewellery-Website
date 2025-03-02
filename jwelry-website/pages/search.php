<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
        <!-- For AOS Animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>Search Results</title>
    </head>
    

<body>
<?php
include '../includes/header.php'; 
?>

    <h2>Search Results for "<span id="search-query"></span>"</h2>
    <div id="search-results"></div>

    <?php
include '../includes/footer.php'; 
?>


    <!-- Script -->
    <script>
        // Get query from URL
        function getSearchQuery() {
            const params = new URLSearchParams(window.location.search);
            return params.get("query") || "";
        }

        // Product List
        const products = [
            { name: "Silver Bracelet", price: "\u20B9" + "1,999", image: "../assets/images/search1.jpg" },
            { name: "Luxury Necklace", price: "\u20B9" + "26,999", image: "../assets/images/search2.jpg" },
            { name: "Elegant Ring", price: "\u20B9" + "1,199", image: "../assets/images/search3.jpg" },
            { name: "Silver Earrings", price: "\u20B9" + "1,799", image: "../assets/images/search4.jpg" }
        ];

        // Display Search Results
        function displaySearchResults() {
            const query = getSearchQuery().toLowerCase();
            document.getElementById("search-query").textContent = query;

            const filteredProducts = products.filter(product => product.name.toLowerCase().includes(query));

            const resultsContainer = document.getElementById("search-results");
            resultsContainer.innerHTML = "";

            if (filteredProducts.length === 0) {
                resultsContainer.innerHTML = "<p>No products found.</p>";
            } else {
                filteredProducts.forEach(product => {
                    const productDiv = document.createElement("div");
                    productDiv.classList.add("product");

                    productDiv.innerHTML = `
                        <img src="${product.image}" alt="${product.name}">
                        <h3>${product.name}</h3>
                        <p>${product.price}</p>
                        <button class="buy-button" onclick="buyNow('${product.name}', '${product.price}', '${product.image}')">Buy Now</button>
                    `;

                    resultsContainer.appendChild(productDiv);
                });
            }
        }

        function buyNow(name, price, image) {
            window.location.href = `checkout.php?name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}&image=${encodeURIComponent(image)}`;
        }

        document.addEventListener("DOMContentLoaded", displaySearchResults);

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
    </script>


</body>

<!-- Main Js -->
<script src="../assets/js/script.js"></script>

</html>