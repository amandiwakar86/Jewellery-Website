<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/session_fav.css">
    <!-- For AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Seasonal Favorites - Jewelry</title>
</head>
<body>
<?php
include '../includes/header.php'; 
?>

    <h1>
        Seasonal Favorites
    </h1>
    <section class="container" id="seasonal-list">
    </section>

    
    <?php
include '../includes/footer.php'; 
?>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const seasonalData = [
            {"image": "autumn_ring.jpg", "name": "Autumn Gold Ring", "description": "A warm gold ring perfect for fall.", "price": "199"},
            {"image": "winter_necklace.jpg", "name": "Winter Pearl Necklace", "description": "Elegant pearls for a frosty season.", "price": "299"},
            {"image": "spring_earrings.jpg", "name": "Spring Floral Earrings", "description": "Blossom-inspired earrings for a fresh look.", "price": "179"}
        ];
        
        const seasonalList = document.getElementById("seasonal-list");
        seasonalData.forEach(item => {
            const card = document.createElement("div");
            card.classList.add("jewelry-card");
            card.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div class="content">
                    <h2>${item.name}</h2>
                    <p>${item.description}</p>
                    <div class="price">$${item.price}</div>
                    <button class="btn">Add to Cart</button>
                </div>
            `;
            seasonalList.appendChild(card);
        });
    });
</script>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Main Js -->
 <script src="../assets/js/script.js"></script>
</html>
