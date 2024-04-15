<?php 
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $LastName = $_POST['lastname'];
    $FirstName = $_POST['firstname'];
    $Email = $_POST['email'];

    if(!empty($Username) && !empty($Password) && !is_numeric($Username)) {
        // Save to database
        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id, Username, Password, Last_Name, First_Name, Email) VALUES ('$user_id', '$Username', '$Password', '$LastName', '$FirstName', '$Email')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Page</title>
<style>
    body {
        font-family: Inter, sans-serif;
        margin: 0;
        padding: 0;
    }
    .background-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('bg.png'); /* Update with the filename of your background image */
        background-size: cover;
        background-position: center;
        z-index: -1; /* Place the background image behind other content */
    }
    .container {
        width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the container */
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }
    .logo {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        margin-top: -50px; /* Adjust the margin to vertically center the logo */
    }
    .logo img {
        width: 100px; /* Adjust logo size as needed */
        height: auto;
        border-radius: 20px; /* Soften the border of the image */
    }
    h2 {
        text-align: center;
        margin-top: 50px; /* Adjust the margin to vertically center the text */
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: calc(100% - 40px); /* Adjust the width as needed */
        padding: 8px; /* Adjust padding */
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* Include padding and border in the width */
    }
    /* Button style */
    button[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50; /* Green background color */
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s; /* Smooth transition on hover */
    }
    button[type="submit"]:hover {
        background-color: #45a049; /* Darker green color on hover */
    }
    p {
        text-align: center;
    }
</style>
</head>
<body>

<div class="background-image"></div>

<div class="container">
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Sign Up</button>
        </div>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
