<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join a UTeam for UConnect</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007bff; /* Change background color to blue */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #007bff; /* Blue header color */
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #ffc107; /* Yellow button */
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ffdb6a; /* Darker yellow on hover */
        }

        .container.signin {
            text-align: center;
        }

        .container.signin a {
            color: #000;
            text-decoration: none;
        }

        .container.signin a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<form action="#">
    <div class="container">
        <h1>Join a UTeam for UConnect</h1>
        <p>Please fill in this form to join a UTeam.</p>
        <hr>

        <label for="tname"><b>Team Name</b></label>
        <input type="text" placeholder="Enter Team Name" name="tname" id="tname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <p>By creating a team you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Don't have a team? <a href="teamCreate.php">Create a UTeam</a>.</p>
    </div>
</form>
</body>
</html>
