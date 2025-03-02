<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ./jwelry-website/userAuthentication/login.php"); Redirect to login if not logged in
    exit();
}
?>