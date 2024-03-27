<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UConnect Home Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: cornflowerblue; /* Blue background */
            color: white; /* White text */
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .text-content {
            width: 50%;
            padding-left: 20px;
        }

        h1, p {
            font-weight: bold; /* Bold text */
        }

        .navbar {
            display: flex;
            align-items: center;
        }

        .navbar a {
            padding: 10px 20px;
            margin-right: 20px;
            background-color: #ffcc00; /* Yellow button */
            color: #fff; /* White text color */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #ffd700; /* Darker yellow on hover */
        }

        .image-container {
            width: 50%;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-content">
        <h1>UConnect Your virtual whiteboard</h1>
        <p>Track your team whiteboard for everyday</p>
        <div class="navbar">
            <a href="login.php">Log In</a>
        </div>
    </div>
    <div class="image-container">
        <img src="images/image.png" alt="UConnect Animation">
    </div>
</div>

</body>
</html>
