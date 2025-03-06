
// For Trending section to add products dynamically
// Sample trending products data
const trendingProducts = [
    { name: "Silver Bracelet", price: "\u20B9" + "1,299", image: "./jwelry-website/assets/images/trend1.jpg" },
    { name: "Elegant Ring", price: "\u20B9" + "1,999", image: "./jwelry-website/assets/images/trend2.jpg" },
    { name: "Luxury Necklace", price: "\u20B9" + "30,999", image: "./jwelry-website/assets/images/trend3.jpg" },
    { name: "Silver Earrings", price: "\u20B9" + "3,999", image: "./jwelry-website/assets/images/trend4.jpg" }
];
// Function to display trending products
function displayTrendingProducts() {
    const container = document.getElementById("products-container");
    container.innerHTML = ""; // Clear old products before adding new ones

    trendingProducts.forEach((product, index) => {
        const productDiv = document.createElement("div");
        productDiv.classList.add("product");

        productDiv.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p class="price">${product.price}</p>
            <button onclick="buyNow(${index})">Buy Now</button>
        `;

        container.appendChild(productDiv);
    });
}
// Function to handle "Buy Now"
function buyNow(index) {
    const selectedProduct = trendingProducts[index];
    alert(`You selected: ${selectedProduct.name} for ${selectedProduct.price}`);
    // Redirect to checkout page with product details
    window.location.href = `./jwelry-website/pages/checkout.php?name=${encodeURIComponent(selectedProduct.name)}&price=${encodeURIComponent(selectedProduct.price)}&image=${encodeURIComponent(selectedProduct.image)}`;
}

// Load products when page loads
document.addEventListener("DOMContentLoaded", displayTrendingProducts);

// Commond to add products
// trendingProducts.push({
//     name: "Silver Pendant",
//     price: "$90",
//     image: "https://via.placeholder.com/200"
// });

//  For Deal Banner
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const slider = document.getElementById('slider');

function showSlide(index) {
    if (index >= slides.length) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = slides.length - 1;
    } else {
        currentIndex = index;
    }
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

setInterval(nextSlide, 3000); // Auto-slide every 3 seconds

// FAQs section-----------------------------

document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const parent = question.parentElement;
        const answer = question.nextElementSibling;
        parent.classList.toggle('expanded');
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});


const dailyOffers = [
    { name: "Silver Bracelet", price: "\u20B9" + "1,299", image: "./jwelry-website/assets/images/offer1.jpg" },
    { name: "Luxury Necklace", price: "\u20B9" + "30,999", image: "./jwelry-website/assets/images/offer2.jpg" },
    { name: "Elegant Ring", price: "\u20B9" + "19,299", image: "./jwelry-website/assets/images/offer3.jpg" }
];

// Function to select one offer product per day
function selectDailyOffer() {
    const today = new Date().getDate(); // Get the day of the month
    const offerIndex = today % dailyOffers.length; // Select offer based on day
    return dailyOffers[offerIndex];
}

// Display the selected offer banner
function displayOfferBanner() {
    const offerProduct = selectDailyOffer();
    document.getElementById("offer-name").textContent = offerProduct.name;
    document.getElementById("offer-price").textContent = "Special Price: " + offerProduct.price;
    document.getElementById("offer-image").src = offerProduct.image;
}

// Redirect user to checkout page when they click the offer banner
function buyOfferProduct() {
    const offerProduct = selectDailyOffer();
    window.location.href = `../pages/ checkout.php?name=${encodeURIComponent(offerProduct.name)}&price=${encodeURIComponent(offerProduct.price)}&image=${encodeURIComponent(offerProduct.image)}`;
}

// Load the offer banner when the page loads
document.addEventListener("DOMContentLoaded", displayOfferBanner);

// ---------------------------------------------------------------------
// Sample Product List
const products = [
    { name: "Silver Bracelet", price: "$40", image: "https://via.placeholder.com/100" },
    { name: "Luxury Necklace", price: "$100", image: "https://via.placeholder.com/100" },
    { name: "Elegant Ring", price: "$70", image: "https://via.placeholder.com/100" },
    { name: "Silver Earrings", price: "$30", image: "https://via.placeholder.com/100" }
];

// Function to handle search when Enter is pressed
function handleSearch(event) {
    if (event.key === "Enter") {
        const searchQuery = document.getElementById("search-box").value.trim().toLowerCase();
        if (searchQuery !== "") {
            window.location.href = `./jwelry-website/pages/search.php?query=${encodeURIComponent(searchQuery)}`;
        }
    }
}


// For team
