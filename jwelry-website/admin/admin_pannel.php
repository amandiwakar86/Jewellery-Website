<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ./login.php"); // Redirect to login if not logged in
    exit();
}
?>
<?php
// Automatically detect base URL
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/jweleryWebsite/jwelry-website/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin_pannel.css">
    <script src="script.js" defer></script>
    <title>Admin Panel - Silver E-Commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .admin-container {
            width:95%;
            margin: auto;
            padding: 20px;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            cursor: pointer;
        }
        #content {
            width: 90%;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            min-height: 400px;
            background: #f9f9f9;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
        }
        @media (max-width: 479px) {
            .admin-container {
                width: 100%;
                height: 100vh;
                padding: 10px;
            }
            .admin-container nav {
                height: 200px;
            }
            .admin-container nav ul {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            .admin-section {
                width: 100%;
                height: 100px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <section class="admin-section">
        <h2>Welcome to the Sinjhini Jewelers Admin Panel (Dashboard)</h2>
        <p>Use the navigation to manage the website.</p>
    </section>
    <div class="admin-container">
        <nav>
            <ul>
                <li><a onclick="loadPage('products.php')">Add Products</a></li>
                <li><a onclick="loadPage('viewProducts.php')">View Products</a></li>
                <li><a onclick="loadPage('orders.php')">Manage Orders</a></li>
                <li><a onclick="loadPage('users.php')">Manage Users</a></li>
                <li><a onclick="loadPage('logout.php')">Logout</a></li>
            </ul>
        </nav>

        <!-- Content will load here -->
        <div id="content">
            <h3>Select an option from the menu</h3>
        </div>
    </div>

    <script>
        function loadPage(page) {
            fetch(page)
            .then(response => response.text())
            .then(data => {
                document.getElementById('content').innerHTML = data;
            })
            .catch(error => console.error('Error loading page:', error));
        }
    </script>
</body>
</html>
