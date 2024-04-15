<?php
# Access session.
session_start();
# Redirect if not logged in.
if (!isset($_SESSION['user_id'])) {
    require('login_tools.php');
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Workshop 5</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .card {
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="background-color:#ede9e9;">
<nav class="navbar navbar-expand-lg" style="background-color:#3C6373;">
    <a class="navbar-brand" href="home.php" style="color: #F2E4D8;">
        <?php
        // Check if 'first_name' and 'last_name' are set in $_SESSION before accessing them
        if (isset($_SESSION['first_name'], $_SESSION['last_name'])) {
            echo "{$_SESSION['first_name']} {$_SESSION['last_name']}";
        }
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="cart.php" style="color: #F2E4D8;">View Shopping Cart<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="logout.php" style="color: #F2E4D8;">Log Out<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
