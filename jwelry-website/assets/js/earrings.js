function displayProducts() {
    let productsContainer = document.getElementById("productsContainer");
    productsContainer.innerHTML = "";
    let products = JSON.parse(localStorage.getItem("products")) || [];

    products.forEach(product => {
        let productCard = document.createElement("div");
        productCard.classList.add("product-card");

        productCard.innerHTML = `
            <img src="${product.image}" alt="${product.name}" width="100">
            <h3>${product.name}</h3>
            <p>Price: $${product.price}</p>
            <p>${product.description}</p>
        `;

        productsContainer.appendChild(productCard);
    });
}

window.onload = displayProducts;