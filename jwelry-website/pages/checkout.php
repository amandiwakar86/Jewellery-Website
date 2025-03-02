<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/checkout.css">
    <!-- For AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Checkout</title>
</head>

<body>
<?php
include '../includes/header.php'; 
?>

    <div class="checkout-container">
        <form id="checkoutForm" action="process_order.php" method="POST">
            <div class="order_summary">
                <!-- Order Summary -->
                <h3>Order Summary</h3>
                <div id="orderSummary">
                    <p>Loading product details...</p>
                </div>
            </div>

            <div class="fields">
                <!-- Customer Details -->
                <h3>Billing Details</h3>
                <label>Name:</label>
                <input type="text" name="name" required>
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Address:</label>
                <textarea name="address" required></textarea>
                <label>Phone:</label>
                <input type="tel" name="phone" required>
            </div>

            <div class="payment_method">
                <!-- Payment -->
                <h3>Payment Method</h3>
                <select name="payment_method" required>
                    <option value="cod">Cash on Delivery</option>
                    <option value="razorpay">Razorpay</option>
                    <option value="stripe">Stripe</option>
                </select>

                <input type="hidden" name="total_price" id="totalPrice">
                <button type="submit">Place Order</button>
            </div>
        </form>
    </div>

<?php
include '../includes/footer.php'; 
?>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            let productID = new URLSearchParams(window.location.search).get('product_id');

            fetch(`fetch_product.php?product_id=${productID}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById("orderSummary").innerHTML = `
                        <p><strong>Product:</strong> ${data.name}</p>
                        <p><strong>Price:</strong> ₹${data.price}</p>
                    `;
                    document.getElementById("totalPrice").value = data.price;
                });
        });
    </script>
</body>
<script src="../assets/js/script.js"></script>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>