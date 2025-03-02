<?php
session_start();
session_destroy();
header("Location: ./registration.php"); // Redirect to login page
exit();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
    margin: 0;
}

.logout-container {
    text-align: center;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.logout-btn {
    display: inline-block;
    background: red;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 10px;
}

.logout-btn:hover {
    background: darkred;
}

</style>
<body>
    <div class="logout-container">
        <h2>Are you sure you want to logout?</h2>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
