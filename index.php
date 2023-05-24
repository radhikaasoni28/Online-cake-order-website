<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // If the user is not logged in, redirect them to the login page or display an error message
    header('Location: login.php');
    exit;
} else {
    // If the user is logged in, redirect them to the index page
    header('Location: home.php');
    exit;
}
?>
