<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Seller Access Code</title>
<link rel="stylesheet" href="styles.css">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .top-bar {
        background-color: #333;
        color: #fff;
        padding: 20px 20px;
    }
    .logout-button {
        float: right;
        background-color: #f44336;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 6.5px 16px;
        cursor: pointer;
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
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"] {

        width: calc(100% - 40px); /* Adjust the width as needed */
        padding: 10px;
        font-size: 14px; /* Adjust font size */
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* Include padding and border in the width */
        text-align: center;
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

<div class="top-bar">
    <span>Amersavi</span>
    <button class="logout-button">Logout</button>
</div>

<div class="background-image"></div>

<div class="container">
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <h2>Seller Access Code</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <input type="text" id="shopCode" name="shopCode" placeholder="Enter shop access code" required>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
