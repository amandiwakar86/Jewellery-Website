<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/faqs.css">
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
    <title>FAQs</title>
</head>
<body>
<?php
include '../includes/header.php'; 
?>

    <div class="faq-container">
        <h2 class="faq-header">Frequently Asked Questions</h2>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What services do you offer? <span>+</span></h3>
            <p>We offer a range of services including web development, mobile app development, and digital marketing.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>How can I contact customer support? <span>+</span></h3>
            <p>You can reach us via email at support@example.com or call us at (123) 456-7890.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        

    </div>
    <?php
include '../includes/footer.php'; 
?>

    
    <script>
        function toggleFAQ(element) {
            element.classList.toggle("active");
            let span = element.querySelector("h3 span");
            span.textContent = element.classList.contains("active") ? "-" : "+";
        }
    </script>
</body>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Main Js -->
 <script src="../assets/js/script.js"></script>
</html>
