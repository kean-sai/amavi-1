<?php
session_start();
	include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("bg.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 200vh; /* Ensure full viewport height */
        }

        header {
            background-color: #D8CBC5;
            padding: 10px;
            text-align: center;
            color: #333; /* Adjust text color to be visible on the header background */
        }

        header a {
            text-decoration: none;
            color: #333;
            margin: 0 20px;
        }

        .logout {
            margin-left: 20px;
        }

        .content {
            padding: 20px;
            color: #333; /* Adjust text color to be visible on the background */
            text-align: center;
        }

        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px; /* Adjust logo size as needed */
            height: auto;
            border-radius: 10px; /* Soften the border of the image */
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Amersavi!</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#store">Store</a>
            <a href="#details">Details</a>
        </nav>
        <!-- Add logout button -->
        <a href="logout.php" class="logout">Logout</a>
    </header>
    <div class="content">
        <!-- Add logo -->
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="image-box">
            <img src="merch.jpg" alt="Image 1">
        </div>
        <p>pascian merch</p>
    </div>
</body>
</html>


