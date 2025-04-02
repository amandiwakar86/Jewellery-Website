<?php
// Automatically detect base URL
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/jweleryWebsite/jwelry-website/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/header.css">
    <title>Header</title>
</head>
<style>
    ul {
        list-style: none;
    }

    ul li a {
        text-decoration: none;
        font-weight: bold;
    }

    .header {
        width: 100%;
        height: 100px;
        position: sticky;
        top: 0;
        left: 0;
        z-index: 99;
        color: #fff;
    }

    marquee {
        font-size: 18px;
        color: #fff;
        padding: 5px;
        width: 100%;
        display: inline-block;
        background-color: rgb(240, 64, 64);
    }

    .navbar {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 999;
<<<<<<< HEAD
        background-color:rgba(134, 125, 125, 0.97);
=======
        background-color:rgba(73, 71, 71, 0.54);
>>>>>>> e5a40f958328f7299fc6969a1dbfbaeec22ec958
    }

    .login_btn {
        font-size: 16px;
        border: 1px solid black;
        padding: 3px 6px;
        border-radius: 4px;
        color: #fff;
        background-color:rgba(134, 125, 125, 0.97);
    }

    .logo {
        color:#c5b9b9;
        font-size:2rem;
        margin-left:10px;
    }    

    .hamburger {
        display: none;
        width: 50px;
        height: 50px;
        align-items: center;
        justify-content: center;
        display: flex;
        flex-direction: column;
        gap: 5px;
        z-index: 999;
    }

    .hamburger span {
        display: none;
        width: 30px;
        height: 3px;
        background-color: rgb(5, 5, 5);
    }

    /* Style menu bar for tablates */
    #menu {
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        background-color:rgba(73, 71, 71, 0.54);
        width: 300px;
        height: 100vh;
        position: fixed;
        top: 0;
        right: -300px;
        transition: right 0.8s ease-in-out;
        color:white;
    }

    .phone-menu .menu {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 10px;
        padding-top: 50PX;
    }

    /* .phone-menu .menu .menu-item {
        font-size: 25px;
    } */

    .phone-menu .dropDownMenu {
        display: none;
        height: 300px;
        position: absolute;
        top: 10px;
        left: 50px;
        background-color:rgba(134, 125, 125, 0.97);
        box-shadow: 0px 0px 10pxrgb(59, 60, 61);
        text-align: start;
        padding: 10px;
        border-radius: 4px;
        z-index: 9999;
    }
    .phone-menu  .derop-menu-tag{
        font-size: 20px;
    }
    

    .phone-menu .DropDownMenu1 {
        width: 150px;
        height: 370px;
    }

    .phone-menu .DropDownMenu2 {
        width: 200px;
        height: 170px;
    }

    .phone-menu .DropDownMenu3 {
        width: 200px;
        height: 140px;
    }

    .phone-menu .DropDownMenu4 {
        width: 230px;
        height: 140px;
    }


    /* style menu for big devices */
    .nav-links .menu {
        display: flex;
        flex-wrap: wrap;
        /* gap: 35px; */
        justify-content: space-around;
        padding: 5px;
        gap: 20px;
    }

    .menu-item a {
        gap: 5;
        font-size: 20px;
        color:#c5b9b9;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    .menu-item:hover .fa-regular {
        transform: rotate(90deg);
    }

    .menu-item {
        padding: 10px;
        position: relative;
    }

    .dropdown:hover .dropDownMenu {
        display: block;
    }

    .dropDownMenu {
        display: none;
        height: 300px;
        position: absolute;
        top: 100%;
        background-color:rgba(56, 54, 54, 0.86);
        /* box-shadow: 0px 0px 10px #007bff; */
        text-align: start;
        padding: 10px;
        border-radius: 4px;
        border:1px solid #fff;
    }

    .DropDownMenu1 {
        width: 200px;
        height: 360px;
    }

    .DropDownMenu2 {
        width: 210px;
        height: 170px;
    }

    .DropDownMenu3 {
        width: 200px;
        height: 140px;
    }

    .DropDownMenu4 {
        width: 260px;
        height: 140px;
    }

    .dropDownMenu li {
        padding: 10px;
    }

    .dropDownMenu li a {
        font-size: 16px;
        z-index: 20;
    }


    .dropDownMenu li:hover {
        background-color: #ffffff5e;
    }
    .dropDownMenu li:hover a{
        color: rgba(15, 15, 15, 0.37)
    }

    .nav-icons {
        max-width: 200px;
        display: flex;
        gap: 30px;
        justify-content: space-between;
        align-items: center;
        font-size: 25px;
        padding: 10px 30px;
    }

    @media (min-width: 320px) and (max-width: 479px) {
        marquee {
            font-size: 12px;
        }

        .header {
            width: 100%;
            height: 75px;
        }

        .navbar {
            height: 40px;
            padding:5px;
        }


        .phone-menu {
            display: block;
        }

        .phone-menu .menu {
            width: 100%;
        }

        .search-Container {
            height: 20px;
            min-width: 100px;
        }
        
        .login_btn {
            font-size: 12px;
        }

        .logo {
            font-size: 20px;
        }

        #search-box {
            margin: 5px auto;
        }

        .nav-icons {
            font-size: 18px;
            width: 160px;
            gap: 6px;
        }


        .loginBtn button {
            padding: 5px 3px;
            font-size: 13px;
        }

        .search-box {
            padding: 5px;
        }

        .hamburger {
            height: 30px;
            width: 30px;
        }

        .hamburger span {
            display: block;
            width: 25px;
            height: 2px;
        }

        .nav-links .menu {
            display: none;
        }

        .menu-item a {
            font-size: 13px;
        }

        .icon-box a {
            font-size: 13px;
        }

        .loginBtn button {
            padding: 5px 3px;
            font-size: 13px;
        }

        .search-box {
            padding: 5px;
        }
    }

    @media (min-width: 480px) and (max-width: 767px) {
        marquee {
            font-size: 12px;
        }

        .phone-menu {
            display: block;
        }

        .search-container {
            display: none;
        }

        .searcher-icons {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 40px;
        }

        .menu-item a {
            font-size: 20px;
        }

        .icon-box a {
            font-size: 13px;
        }

        .loginBtn button {
            padding: 5px 3px;
            font-size: 13px;
        }

        .search-box {
            padding: 5px;
        }

        .hamburger span {
            display: block;
            width: 30px;
            height: 3px;
            background-color: rgb(5, 5, 5);
        }

        .nav-links .menu {
            display: none;
        }

       

        .loginBtn button {
            padding: 5px 3px;
            font-size: 13px;
        }

        .search-box {
            padding: 5px;
        }

}

@media (min-width: 768px) and (max-width: 1024px) {


    .menu-item a {
        font-size: 15px;
    }

    .icon-box a {
        font-size: 13px;
    }
        .navbar {
            height: 60px;
        }

        .hamburger span {
            display: block;
            width: 30px;
            height: 3px;
            /* background-color: rgb(5, 5, 5); */
        }

        .nav-links .menu {
            display: none;
        }

        #search-box {
            margin: 10px auto;
        }


        .loginBtn button {
            padding: 5px 3px;
            font-size: 13px;
        }

        .search-box {
            padding: 5px;
        }
    }
</style>

<body>
    <header class="header">
        <marquee behavior="scroll" direction="left" id="dynamicMarquee" scrollamount="5">
            Sparkle & Save! Extra 10% OFF on Prepaid Orders - Use Code: SILVER10
        </marquee>
        <div class="navbar">
            <a href="../../index.php" class="logo">SINJHINI</a>
            <!-- <div class="logo">SINJHINI</div> -->
            <!-- <div class="logo"><img src="./jwelry-website/assets/images/logo.jpg" alt="Logo"></div> -->
            <div class="phone-menu" id="menu">
                <ul class="menu">
                    <li class="menu-item dropdown"><a class="derop-menu-tag" href="#">Shop</a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <ul>
                                <li><a href="<?php echo $base_url; ?>pages/all-products.php">All Jewellery</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/rings.php">Rings</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/earrings.php">Bali & Earrings</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/anklit.php">Anklet</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/baby.php">Baby</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/lady-bracelets.php">Lady Bracelets</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/neckllaces.php">Necklaces</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/chains.php">Chains</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/toe-rings.php">Toe Rings</a></li>
                            </ul>

                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a class="derop-menu-tag"  href="#">Collections</a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/new-arrivals.php">New Arrivals</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/best_sallers.php">Best Sallers</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/gift_ideas.php">Gift Ideas</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/sessonal_fabourite.php">Seasonal Fabourite</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a class="derop-menu-tag" href="#">About Us</a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Our Story</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Mission & Values</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/team.php">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a class="derop-menu-tag" href="#">Customer Care</a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/contact.php">Contact Us</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/faqs.php">FAQs</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/Return_refund_policy.php">Return & Refound
                                    Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a class="derop-menu-tag" href="<?php echo $base_url; ?>pages/blogs.php">Blogs</a></li>
                </ul>
            </div>
            <div class="nav-links">
                <ul class="menu">
                    <li class="menu-item dropdown"><a href="#">Shop <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <ul>
                                <li><a href="<?php echo $base_url; ?>pages/all-products.php">All Jewellery</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/rings.php">Rings</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/earrings.php">Bali & Earrings</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/anklit.php">Anklet</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/baby.php">Baby</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/ladyBraclets.php">Lady Bracelets</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/neckllaces.php">Necklaces</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/chains.php">Chains</a></li>
                                <li><a href="<?php echo $base_url; ?>pages/toe-rings.php">Toe Rings</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Collections <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/new-arrivals.php">New Arrivals</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/best_sallers.php">Best Sallers</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/gift_ideas.php">Gift Ideas</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/sessonal_fabourite.php">Seasonal Fabourite</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">About Us <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Our Story</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Mission & Values</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/team.php">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Customer Care <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/contact.php">Contact Us</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/faqs.php">FAQs</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/Return_refund_policy.php">Return & Refound Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="<?php echo $base_url; ?>pages/blogs.php">Blogs</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <a href="<?php echo $base_url; ?>dashboard/userDashboard.php"> <i class="fa-solid fa-user"></i></a>
                <a href="<?php echo $base_url; ?>pages/cart.php"> <i class="fa-solid fa-cart-shopping"></i></a>
                <a href="<?php echo $base_url; ?>userAuthentication/login.php" class="login_btn">Login</a>
                <div class="hamburger" id="menu-toggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
</body>
<script src="../assets/js/header.js"></script>

</html>