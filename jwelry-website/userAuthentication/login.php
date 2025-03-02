<?php
session_start();
require_once '../includes/csrf.php'; // Ensure CSRF is generated
$csrf_token = generateCsrfToken(); // Fetch CSRF token
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Signup & Login</title>
    <script>
        function toggleForms() {
            document.getElementById("signup-form").classList.toggle("hidden");
            document.getElementById("login-form").classList.toggle("hidden");
        }
    </script>
</head>
<body>

    <div class="container">
        <h2>Signup & Login</h2>

        <!-- Signup Form -->
        <form id="signup-form" action="auth.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="text" name="address" placeholder="Address" required>
            <button type="submit" name="signup">Signup</button>
            <span class="toggle-btn" onclick="toggleForms()">Already have an account? Login</span>
        </form>

        <!-- Login Form (Initially Hidden) -->
        <form id="login-form" action="auth.php" method="POST" class="hidden">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <span class="toggle-btn" onclick="toggleForms()">Don't have an account? Signup</span>
        </form>
    </div>

</body>
</html>
