<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $LastName = $_POST['lastName'];
    $FirstName = $_POST['firstName'];
    $Email = $_POST['email'];

    if(!empty($Username) && !empty($Password) && !is_numeric($Username)) {
        // Read database
        $query = "select * from users where Username = '$Username' limit 1";

        $result = mysqli_query($con, $query);

        if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $Password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
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
    input[type="password"] {
        width: calc(100% - 40px); /* Adjust the width as needed */
        padding: 10px;
        font-size: 14px; /* Adjust font size */
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
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
    <p>No account? <a href="signup.php">Sign Up</a></p>
</div>

</body>
</html>
