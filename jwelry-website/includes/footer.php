<?php
// Automatically detect base URL
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/jweleryWebsite/jwelry-website/";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/footer.css">
    <title>Document</title>
</head>

<body>
    <!-- Footer section -->
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Silver Elegance</h2>
                <p>Discover the finest silver jewellery with exquisite craftsmanship and timeless beauty.</p>
            </div>

            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/all-products.php">Shop</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/about.php">About Us</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/contact.php">Contact</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/faqs.php">FAQs</a></li>
                    <li><a href="<?php echo $base_url; ?>admin/admin_pannel.php">Admin Panel</a>
                    </li>
                </ul>
            </div>

            <div class="footer-section support">
                <h3>Customer Support</h3>
                <ul>
                    <li><a href="#">Shipping & Returns</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/Return_refund_policy.php">Privacy Policy</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/terms.php">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="footer-section newsletter">
                <h3>Join Our Newsletter</h3>
                <form>
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>

            <div class="footer-section social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/silverjewelry.agra/?utm_source=ig_web_button_share_sheet"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Silver Elegance | All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>