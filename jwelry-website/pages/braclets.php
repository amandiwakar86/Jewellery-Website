<!-- bracelets.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/braclets.css">
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
        <title>Bracelets</title>
</head>

<body>
<?php
include '../includes/header.php'; 
?>

<h1>Elegant Bracelets Collection</h1>
<div id="products" data-aos="flip-left"></div>
<?php
include '../includes/footer.php'; 
?>


    <script>
        fetch('fetch_bracelets.php')
            .then(response => response.json())
            .then(data => {
                let productsDiv = document.getElementById('products');
                data.forEach(product => {
                    let productHTML = `
                        <div class='product'>
                            <img src="${product.image}" alt="${product.name}">
                            <h2>${product.name}</h2>
                            <p>Price: $${product.price}</p>
                            <button onclick="buyProduct(${product.id})">Buy Now</button>
                        </div>
                    `;
                    productsDiv.innerHTML += productHTML;
                });
            });

        function buyProduct(id) {
            alert('Product ' + id + ' added to cart!');
        }


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
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Main js -->
<!-- <script src="../assets/js/script.js"></script> -->

</html>