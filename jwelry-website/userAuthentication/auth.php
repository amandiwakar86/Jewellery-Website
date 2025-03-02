<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/csrf.php'; // Include CSRF functions

$csrf_token = generateCsrfToken(); // Generate CSRF token for the form

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST['csrf_token']) || !verifyCsrfToken($_POST['csrf_token'])) {
        die("<script>alert('CSRF Token validation failed! Please refresh the page and try again.'); window.location.href = './auth.php';</script>");
    }

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        die("<script>alert('Email and Password are required!'); window.location.href = './auth.php';</script>");
    }

    if (isset($_POST['signup'])) { // Registration Process
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);

        if (empty($name) || empty($phone) || empty($address)) {
            die("<script>alert('All fields are required!'); window.location.href = './auth.php';</script>");
        }

        $password_hash = password_hash($password, PASSWORD_ARGON2ID);

        // Check if email exists
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            die("<script>alert('Email already registered! Please login.'); window.location.href = './auth.php';</script>");
        }
        $stmt->close();

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $password_hash, $phone, $address);
        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            echo "<script>alert('Registration Successful!'); window.location.href = '../../index.php';</script>";
        } else {
            die("<script>alert('Error: " . $stmt->error . "');</script>");
        }
        $stmt->close();
    } elseif (isset($_POST['login'])) { // Login Process
        $stmt = $conn->prepare("SELECT user_id, name, email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $name, $email, $hashed_password);
        $stmt->fetch();

        if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            echo "<script>alert('Login Successful!'); window.location.href = '../../index.php';</script>";
        } else {
            echo "<script>alert('Invalid email or password.'); window.location.href = './auth.php';</script>";
        }
        $stmt->close();
    }
}
$conn->close();
?>
