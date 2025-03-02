<?php
session_start();
session_destroy(); // Remove all session data
header("Location: ./login.php"); // Redirect to login page
exit();
?>
