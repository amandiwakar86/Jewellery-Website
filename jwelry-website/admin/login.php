<?php
session_start();
include '../includes/config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Encrypt password

    // Check admin credentials
    $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['admins'] = $username;
        header("Location: admin_pannel.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    animation: fadeIn 1s ease-in-out;
    width: 320px;
}

@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

h2 {
    color: white;
    margin-bottom: 15px;
}

input {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 25px;
    text-align: center;
    outline: none;
    transition: 0.3s;
    font-size: 16px;
}

input:focus {
    background: rgba(255, 255, 255, 0.3);
    color: white;
}

button {
    width: 100%;
    padding: 10px;
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    border: none;
    border-radius: 25px;
    color: white;
    font-size: 18px;
    cursor: pointer;
    transition: 0.3s;
    outline: none;
}

button:hover {
    background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
    transform: scale(1.05);
}

p {
    color: red;
}

</style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Login</button>
    </form>
</div>


</body>
</html>
