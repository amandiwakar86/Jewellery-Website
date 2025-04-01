<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./jwelry-website/assets/css/style.css">
    <link rel="stylesheet" href="./jwelry-website/assets/css/responsive.css">
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
    <title>Sinjhini.com</title>
</head>
<style>
    /* hero section */
    .searchBar{
        width: 100%;
        height: 40px;
        display:flex;
        align-items:center;
        justify-content: space-between;
        background-color: white;
        border-radius: 50px;
        padding:10px;
    }
    .searchBar:hover{
        border:2px solid gray;
    }
    .searchBar i{
        color:black;
    }


    .searchBar input{
        width: 98%;
        height: 35px;
        outline:none;
        border:none;
        border-radius: 50px;
        font-size:16px;
    }


    /* For Floating Whatsapp button */
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25d366;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        z-index: 1000;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
    }

    .whatsapp-float img {
        width: 40px;
        height: 40px;
    }

    /* Hero Section */
    .hero {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 635px;
        /* Full height */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        /* z-index: 1; */
    }

    /* Background Video */
    #hero-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Overlay */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Dark overlay */
    }
    

    /* Hero Content */
    .hero-content {
        width: 100%;
        position: relative;
        z-index: 2;
        max-width: 90%;
        gap:10px;
    }

    .hero-content h1 {
        font-size: 4rem;
        margin-bottom: 10px;
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    /* Button */
    .btn {
        display: inline-block;
        background: #d4af37;
        color: white;
        padding: 12px 24px;
        text-decoration: none;
        font-size: 1.2rem;
        border-radius: 5px;
        transition: 0.3s;
        margin-top:10px;
    }

    .btn:hover {
        background: #b8952a;
    }

    /* Video Control Button */
    #video-control {
        width: 150px;
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.3);
        color: white;
        padding: 8px 16px;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        border-radius: 5px;
        transition: 0.3s;
    }

    #video-control:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    .new-collection-section {
        margin-top: 550px;
    }
    @media (max-width: 320px) {
        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-content p {
            font-size: 1rem;
        }
        .new-collection-section {
        margin-top: 570px;
        }

        .btn {
            font-size: 1rem;
        }

           /* Hero Section */
    .hero {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 300px;
        /* Full height */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        z-index: 1;
    }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-content p {
            font-size: 1rem;
        }
        .new-collection-section {
        margin-top: 500px;
        }

        .btn {
            font-size: 1rem;
        }
    }


    /* Team */

.team-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px;
}

.team-member {
    background: white;
    margin: 15px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 350px;
}

.team-member img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
}

.team-member h3 {
    margin: 10px 0 5px;
}

.team-member p {
    color: gray;
}

</style>


<body>
    <?php
include './jwelry-website/includes/header.php'; 
?>
<div class="whatsapp-logo">
    <a href="https://wa.me/8630750297" target="_blank" class="whatsapp-float">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
</div>

<!-- Hero Sction -->

<section class="hero">
    <video autoplay muted loop id="hero-video">
        <source src="./jwelry-website/assets/videos/video1.mp4.mp4" type="video/mp4">
        <!-- Your browser does not support HTML5 video. -->
    </video>

    <div class="overlay"></div>

    <div class="hero-content">
        <h1>Discover Timeless Elegance</h1>
        <p>Handcrafted Silver jewellery for Every Occasion</p>
        <div class="searchBar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="search-box" placeholder="Search for products..." onkeypress="handleSearch(event)">
        </div>
        <a href="./jwelry-website/pages/all-products.php" class="btn">Shop Now</a>
    </div>
    <button id="video-control" onclick="toggleVideo()">Pause</button>
</section>


    <!-- Category Section -->
<!-- Category Slider Section -->
<section class="category-section swiper">
  <div class="swiper-wrapper">
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/rings.php"><img src="./jwelry-website/assets/category images/ring.jpg" alt="Rings" />
        </a>
      </div>
      <h3>Rings</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/anklit.php"><img src="./jwelry-website/assets/category images/anklit.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>Anklits</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/baby.php"><img src="./jwelry-website/assets/category images/baby.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>baby</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/chains.php"><img src="./jwelry-website/assets/category images/chains.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>Chains</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/earrings.php"><img src="./jwelry-website/assets/category images/earring.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>Earrings</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/ladyBraclets.php"><img src="./jwelry-website/assets/category images/lady-bracelets.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>Lady Bracelets</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/neckllaces.php">        <img src="./jwelry-website/assets/category images/necklaces.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>Necklaces</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/toe-rings.php">        <img src="./jwelry-website/assets/category images/toeRing.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>Toe Rings</h3>
    </div>
    <div class="category-item swiper-slide">
      <div class="category-img">
        <a href="./jwelry-website/pages/gift-ideas.php">        <img src="./jwelry-website/assets/category images/toeRing.jpg" alt="Jewellery" />
        </a>
      </div>
      <h3>Toe Rings</h3>
    </div>
  </div>
  
  <!-- Navigation Buttons -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</section>

<!-- New Collection -->
<section class="new-collection-section">
    <h2>New Collection</h2>
        <div class="newCollectionProducts">
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <img src="./jwelry-website/assets/images/newCollection1.jpg" alt="">
            </a>
        </div>
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <img src="./jwelry-website/assets/images/newCollection2.jpg" alt="">
            </a>
        </div>
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <img src="./jwelry-website/assets/images/newCollection3.jpg" alt="">
            </a>
        </div>
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <img src="./jwelry-website/assets/images/newCollection3.jpg" alt="">
            </a>
        </div>  
    </div>
</section> 

    <!-- Trending Products -->
<section class="trending-section">
    <h2>Trending Products</h2 data-aos="zoom-in-down">
    <div class="products-container" id="products-container" data-aos="zoom-in-up">
         <!-- Products will be added dynamically here -->
    </div>
</section> 

<!-- Deals Section -->
<!-- <section class="deals-section">
        <h2>Exclusive Deals</h2>
        <div class="slider-container">
            <div class="slider" id="slider">
                <div class="slide" style="background-image: url('./jwelry-website/assets/images/deal1.jpg');" object-fit:contain;></div>
                <div class="slide" style="background-image: url('./jwelry-website/assets/images/deal2.jpg');"></div>
                <div class="slide" style="background-image: url('./jwelry-website/assets/images/deal3.jpg');"></div>
            </div>
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
</section> -->
    <!-- Offer banner section -->
<section class="offer-banner-section" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <div id="offer-banner" class="offer-banner" onclick="buyOfferProduct()">
        <img id="offer-image" src="" alt="Special Offer">
            <div class="offer-details">
            <h2 id="offer-name"></h2>
            <p id="offer-price"></p>
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <p class="offer-text">Limited Time Offer! Click to Buy Now</p>
            </a>
        </div>
    </div>
</section>

    <!-- Our costomer section -->
<section class="our-customers">
        <div class="container mx-auto px-6">
            <h2>Our Happy Customers</h2>
            <p>Join our satisfied customers who trust us for their silver jewelry needs.</p>
            <div class="grid">
                <!-- Customer 1 -->
                <div class="customer-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img src="./jwelry-website/assets/images/Customer1.jpg" alt="Customer 1">
                    <p>"Absolutely love my new silver necklace! Great quality and fast delivery."</p>
                    <h4>- Elon Musk</h4>
                </div>

                <!-- Customer 2 -->
                <div class="customer-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img src="./jwelry-website/assets/images/customer2.jpg" alt="Customer 2">
                    <p>"Amazing craftsmanship! I keep coming back for more silver jewelry."</p>
                    <h4>- Mukesh Ambani</h4>
                </div>

                <!-- Customer 3 -->
                <div class="customer-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img src="./jwelry-website/assets/images/customer3.jpg" alt="Customer 3">
                    <p>"Best customer service and stunning designs. Highly recommended!"</p>
                    <h4>- Gautam Adani</h4>
                </div>
        </div>
    </div>
</section> 

    <!-- Store center section -->
<section id="our-store" class="store-section">
        <h2>Our Store</h2>
        <p>Welcome to our premium silver jewelry store! Explore our collection of exquisite designs crafted with
            perfection.</p>

        <div class="store-gallery">
            <img src="store1.jpg" alt="Store Interior">
            <img src="store2.jpg" alt="Silver Jewelry Showcase">
            <img src="store3.jpg" alt="Customer Experience">
        </div>

        <div class="store-location" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <h3>Visit Us</h3>
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.6281700911773!2d78.00573325!3d27.199421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397477465299446b%3A0xac5ba75085a0a0cf!2sSanjay%20Palace%2C%20Sanjay%20Place%2C%20Civil%20Lines%2C%20Agra%2C%20Uttar%20Pradesh%20282002!5e0!3m2!1sen!2sin!4v1738837138637!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" width="100%" height="200" style="border:0;"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
</section> 

<section>
<h1>Meet the Team</h1>
<div class="team-container" id="team" data-aos="flip-left"></div>
</section>
    <!-- FAQs section -->
<div class="faq-container">
        <h2>Frequently Asked Questions (FAQs)</h2>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">1. What type of silver jewelry do you offer? <span class="faq-toggle">&#9662;</span>
            </p>
            <p class="faq-answer">We offer a wide range of high-quality silver jewelry, including rings, necklaces,
                bracelets, earrings, and customized designs. All our pieces are crafted from 925 sterling silver,
                ensuring durability and elegance.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">2. Is your silver jewelry authentic? <span class="faq-toggle">&#9662;</span></p>
            <p class="faq-answer">Yes, our jewelry is made from certified 925 sterling silver. Each piece undergoes a
                thorough quality check to ensure authenticity and excellence.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">3. How do I take care of my silver jewelry? <span class="faq-toggle">&#9662;</span>
            </p>
            <p class="faq-answer">To maintain the shine of your silver jewelry:<br>
                - Store it in an airtight container when not in use.<br>
                - Avoid contact with water, perfumes, and chemicals.<br>
                - Use a soft cloth or silver polish to clean it regularly.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">4. Do you offer customized jewelry? <span class="faq-toggle">&#9662;</span></p>
            <p class="faq-answer">Yes! We provide customization services where you can design your own unique piece or
                engrave names, initials, or special messages. Contact our support team for more details.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">5. How can I determine my ring size? <span class="faq-toggle">&#9662;</span></p>
            <p class="faq-answer">You can refer to our size guide available on the product page or visit a local jeweler
                for precise measurements. If you need further assistance, feel free to contact us.</p>
        </div>
</div>

    <?php
include './jwelry-website/includes/footer.php';
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./jwelry-website/assets/js/script.js"></script>
<script src="./jwelry-website/assets/js/header.js"></script>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    const video = document.getElementById("hero-video");
    const controlButton = document.getElementById("video-control");

    function toggleVideo() {
        if (video.paused) {
            video.play();
            controlButton.innerText = "Pause";
        } else {
            video.pause();
            controlButton.innerText = "Play";
        }
    }

</script>
<!-- Add SwiperJS CDN -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- For category slider -->
<script>
  var swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });


  <!-- For team -->
const teamMembers = [
    { name: "Rohit Baghel", role: "CEO", image: "./jwelry-website/assets/images/team1.jpg" },
    { name: "Rohit Baghel", role: "CTO", image: "./jwelry-website/assets/images/team1.jpg" },
    { name: "Rohit Baghel", role: "Designer", image: "./jwelry-website/assets/images/team1.jpg" }
];

const teamContainer = document.getElementById("team");

teamMembers.forEach(member => {
    const memberDiv = document.createElement("div");
    memberDiv.classList.add("team-member");
    memberDiv.innerHTML = `
        <img src="${member.image}" alt="${member.name}">
        <h3>${member.name}</h3>
        <p>${member.role}</p>
    `;
    teamContainer.appendChild(memberDiv);
});
</script>


</html>