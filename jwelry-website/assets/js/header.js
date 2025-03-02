// For top banner Messages
const messages = [
    "Gift Yourself Some shine - Flat 25% OFF on Silver Bracelets!",
    "Free Express Shipping on All Orders Above Rs.999! Limited Time Only!",
    "Trusted bt Thousands - Join Our Silver Hewelery Community!",
];

let index = 0;
const marquee = document.getElementById("dynamicMarquee");
const scrollDuration = 10; // Time for the message to scroll completely (in seconds)

function changeMarqueeText() {
    index = (index + 1) % messages.length;
    marquee.innerHTML = messages[index];
}

// Scroll event tracking
function startScroll() {
    setTimeout(() => {
        changeMarqueeText(); // Change message after full scroll
        startScroll(); // Keep the scrolling going
    }, scrollDuration * 3000); // Adjust the time for the full scroll duration
}

startScroll(); // Start scrolling and changing messages
// ---------------------------------------------------------------------------------------------
// For Hamburger Icon
document.getElementById("menu-toggle").addEventListener("click", function () {
    var menu = document.getElementById("menu");
    if (menu.style.right === "-500px" || menu.style.right === "") {
        menu.style.right = "0";
    } else {
        menu.style.right = "-500px";
    }
});