document.addEventListener("DOMContentLoaded", () => {
    const products = [
        { name: "Silver Ring", price: "$50", image: "./jwelry-website/assets/images/all-pro-braclets1.jpg" },
        { name: "Silver Necklace", price: "$120", image: "./jwelry-website/assets/images/" },
        { name: "Silver Bracelet", price: "$80", image: "./jwelry-website/assets/images/" },
        { name: "Silver Earrings", price: "$60", image: "./jwelry-website/assets/images/" }
    ];

    const productContainer = document.getElementById("productContainer");

    products.forEach(product => {
        const productCard = document.createElement("div");
        productCard.classList.add("product-card");
        productCard.innerHTML = `
            <img src="images/${product.image}" alt="${product.name}">
            <div>
            <h2>${product.name}</h2>
            <p>${product.price}</p>
            <button>Add to Cart</button>
            <div>
        `;
        productContainer.appendChild(productCard);
    });
});
