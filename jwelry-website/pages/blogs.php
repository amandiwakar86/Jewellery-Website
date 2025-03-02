<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/blogs.css">
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
        <title>Blog</title>
</head>
<body>
<?php
include '../includes/header.php'; 
?>

    <div class="blog-container">
        <h1 class="blog-header">Our Latest Blogs</h1>
        
        <div class="blog-post">
            <h2>Top 10 Silver Jewelry Trends in 2025</h2>
            <img src="silver-trends.jpg" alt="Silver Jewelry Trends">
            <p>Discover the latest trends in silver jewelry that are making waves in 2025. From minimalistic designs to bold statement pieces...</p>
            <a class="read-more" href="#">Read More</a>
        </div>
        
        <div class="blog-post">
            <h2>How to Care for Your Silver Jewelry</h2>
            <video controls>
                <source src="silver-care.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p>Silver jewelry requires proper care to maintain its shine and beauty. Learn expert tips on how to clean and store your silver pieces...</p>
            <a class="read-more" href="#">Read More</a>
        </div>
        
        <div class="blog-post">
            <h2>Why Silver Jewelry is a Must-Have in Your Collection</h2>
            <img src="../assets/images/silverCollection.jpg" alt="Silver Jewelry Collection">
            <p>Silver jewelry is timeless and versatile. Explore the reasons why every jewelry lover should have silver pieces in their collection...</p>
            <a class="read-more" href="#">Read More</a>
        </div>
    </div>

<?php
include '../includes/footer.php'; 
?>

</body>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="../assets/js/script.js"></script>
</html>
