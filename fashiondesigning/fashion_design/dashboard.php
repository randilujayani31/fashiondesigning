<!-- dashboard.php -->
<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.html");
    exit;
}

// Display dashboard content for authenticated users
echo "Welcome, " . $_SESSION["username"] . "! This is your dashboard.";
?>
