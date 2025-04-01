<?php
include '../includes/config.php';

// Fetch categories from database
$conn = new mysqli("localhost", "root", "", "sinjhini_db");
$result = $conn->query("SELECT category_id, category_name FROM categories");

$categories = [];
while ($row = $result->fetch_assoc()) {
    $categories[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
          body {
            font-family: Arial, sans-serif;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-contant:center;
            text-align: center;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 90%;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            color: #541375;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group label {
            position: absolute;
            top: 10px;
            left: 12px;
            color: rgba(34, 10, 66, 0.7);
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input, 
        .input-group select, 
        .input-group textarea {
            width: 100%;
            padding: 10px;
            background: rgb(183 167 167 / 20%);
            border: none;
            border-radius: 5px;
            font-size: 14px;
            color: rgba(34, 10, 66, 0.7);
            outline: none;
            transition: 0.3s;
        }
        input{
            margin-left:15px;
        }

        .input-group input:focus, 
        .input-group select:focus, 
        .input-group textarea:focus {
            background: rgba(196, 154, 154, 0.3);
            /* transform: scale(1.05); */
        }

        .input-group input:focus + label, 
        .input-group select:focus + label, 
        .input-group textarea:focus + label {
            top: -12px;
            font-size: 12px;
            color: rgba(34, 10, 66, 0.7);
        }

        button {
            width: 100%;
            background: #27ae60;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #219150;
            transform: scale(1.05);
        }

        .image-preview {
            width: 100%;
            height: 200px;
            background: rgb(183 167 167 / 20%);
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin-bottom: 15px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .image-preview img {
            width: 100%;
            height: auto;
            display: none;
        }

        .view-products {
            display: block;
            text-align: center;
            color: white;
            text-decoration: none;
            margin-top: 15px;
            transition: 0.3s;
        }

        .view-products:hover {
            text-decoration: underline;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add New Product</h2>

        <form action="./addProduct.php" method="POST" enctype="multipart/form-data" target="_blank">
            <div class="input-group">
                <input type="text" name="name" required>
                <label>Product Name</label>
            </div>

            <div class="input-group">
                <textarea name="description" required></textarea>
                <label>Description</label>
            </div>

            <div class="input-group">
                <input type="number" name="price" step="0.01" required>
                <label>Price (₹)</label>
            </div>

            <div class="input-group">
                <input type="number" name="stock_quantity" required>
                <label>Stock Quantity</label>
            </div>

            <label>Category</label>
            <div class="input-group">
            <select name="category_id" required>
            <option value="">Select Category</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['category_id']; ?>"><?= $category['category_name']; ?></option>
            <?php endforeach; ?>
        </select>
            </div>

            <label style="color: black; font-weight: 600;">Product Image</label>
            <div class="image-preview" id="imagePreview">
                <img id="previewImg" src="#" alt="Product Image">
            </div>
            <input type="file" name="image" accept="image/*" required onchange="previewImage(event)">

            <button type="submit">Add Product</button>
        </form>

        <a href="../pages/all-products.php" class="view-products">View Products</a>
    </div>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const preview = document.getElementById('previewImg');
                preview.src = reader.result;
                preview.style.display = "block";
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>
</html>
