<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Orders - Silver Ecommerce</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .orders-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f8f8f8;
        }
        .order-form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }
        .order-form input, .order-form button {
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .order-form button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .order-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="orders-container">
        <h2>User Orders</h2>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody id="orders-list">
                <!-- Orders will be dynamically added here -->
            </tbody>
        </table>

        <h3>Add New Order</h3>
        <form class="order-form" onsubmit="addOrder(event)">
            <input type="text" id="product" placeholder="Product Name" required>
            <input type="number" id="quantity" placeholder="Quantity" required>
            <input type="number" id="amount" placeholder="Amount" required>
            <button type="submit">Place Order</button>
        </form>
    </div>

    <script>
        let orderId = 12345;
        function addOrder(event) {
            event.preventDefault();
            const product = document.getElementById('product').value;
            const quantity = document.getElementById('quantity').value;
            const amount = document.getElementById('amount').value;
            
            const table = document.getElementById('orders-list');
            const row = table.insertRow();
            row.innerHTML = `<td>#${orderId++}</td><td>${product}</td><td>${quantity}</td><td>₹${amount}</td>`;
            
            document.querySelector('.order-form').reset();
        }
    </script>
</body>
</html>
