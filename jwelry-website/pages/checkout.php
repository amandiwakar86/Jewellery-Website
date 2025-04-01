<?php
include '../includes/config.php';

// Check if the product_id is passed in the URL
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Fetch the product details from the database based on the product_id
    $query = "SELECT * FROM products WHERE product_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the product exists
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc(); // Fetch product data
    } else {
        // If the product is not found
        echo "Product not found.";
        exit;
    }
} else {
    // If no product_id is passed in the URL
    echo "Product ID not provided.";
    exit;
}

// Dynamically get the base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . $host . "/jweleryWebsite/jwelry-website/admin/"; // Correct the path to the 'admin' folder

// Debug: Print the full image URL
// echo $baseUrl . 'uploads/' . basename($product['image_url']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/checkout.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Checkout</title>
</head>

<style>
        /* Resetting default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Container styling */
        .checkout-container {
            max-width: 1200px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;

        }

        .order_summary,
        .fields,
        .payment_method {
            margin-bottom: 30px;
        }

        h3 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #007bff;
        }

        .order_summary p {
            font-size: 18px;
            margin: 10px 0;
        }

        .order_summary img {
            width: 100px;
            height: auto;
            margin-top: 10px;
        }

        .fields label,
        .payment_method label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .fields input,
        .fields textarea,
        .payment_method select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .fields textarea {
            height: 120px;
        }

        .payment_method select {
            height: 40px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            width: 100%;
            margin-top: 20px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .checkout-container {
                padding: 20px;
            }

            h3 {
                font-size: 20px;
            }

            .fields input,
            .fields textarea,
            .payment_method select {
                font-size: 14px;
                padding: 8px;
            }

            .order_summary p {
                font-size: 16px;
            }

            .btn {
                font-size: 16px;
            }
        }
    </style>
<body>
<?php include '../includes/header.php'; ?>

<div class="checkout-container">
    <form id="checkoutForm" action="process_order.php" method="POST">
        <div class="order_summary">
            <h3>Order Summary</h3>
            <div id="orderSummary">
                <!-- Check if product exists and display details -->
                <img src="<?= $baseUrl . 'uploads/' . basename($product['image_url']); ?>" 
                onerror="this.onerror=null; this.src='<?= $baseUrl . 'uploads/default.jpg'; ?>';" 
                alt="Product Image">
                <p><strong>Product:</strong> <?= htmlspecialchars($product['name']); ?></p>
                <p><strong>Price:</strong> ₹<?= number_format($product['price'], 2); ?></p>
            </div>
        </div>

        <div class="fields">
            <h3>Billing Details</h3>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="address">Address:</label>
            <textarea name="address" id="address" required></textarea>

            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" required>
        </div>

        <div class="payment_method">
            <h3>Payment Method</h3>
            <label for="payment_method">Choose Payment Method:</label>
            <select name="payment_method" id="payment_method" required>
                <option value="cod">Cash on Delivery</option>
                <option value="razorpay">Razorpay</option>
                <option value="stripe">Stripe</option>
            </select>

            <input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">
            <input type="hidden" name="total_price" id="totalPrice" value="<?= $product['price']; ?>">

            <button type="submit" class="btn">Place Order</button>
        </div>
    </form>
</div>
<script>
    // AOS Animation Initialization
    AOS.init();
</script>

</body>
<script src="../assets/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>
