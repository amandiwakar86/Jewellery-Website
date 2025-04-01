<?php
session_start(); // Start session

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Silver Ecommerce</title>
    <link rel="stylesheet" href="../../css/user_profile.css">
</head>
<style>
  body {
    font-family: 'Arial', sans-serif;
    /* background: url('../../assets/images/user_progile_background.jpg') no-repeat center center fixed; */
    background-color:#410d63;
    background-size: cover;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Profile Container */
.user_profile {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    width: 550px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    animation: fadeIn 1s ease-in-out;
}
.user_datails{
  width: 100%;
  height:300px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: 10px;
}
/* Heading */
.user_profile h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
    animation: slideIn 1s ease-in-out;
}

/* User Info */
.user_profile p {
    font-size: 18px;
    color: #555;
    /* margin: 10px 0; */
}

/* Links */
.user_profile a {
    display: inline-block;
    text-decoration: none;
    background: #007bff;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

.user_profile a:hover {
    background: #0056b3;
    transform: scale(1.05);
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

<body>
    <div class="user_profile">
        <h1>User Profile</h1>
        <div class="user_datails">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($_SESSION['phone']); ?></p>
        </div>
        <a href="../../../index.php">Back to Main Page</a> |
    </div>
</body>

</html>