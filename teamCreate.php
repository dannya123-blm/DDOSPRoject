<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a UTeam for UConnect</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: cornflowerblue;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
            color: black;
        }

        h1 {
            text-align: center;
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
            background-color: #ffc107;
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
            background-color: #ffdb6a;
        }

        .container.signin {
            text-align: center;
        }

        .container.signin a {
            color: blue;
            text-decoration: none;
        }

        .container.signin a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
// Include the Team class
require_once 'classes/Team.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $teamName = $_POST['tname'];
    $password = $_POST['psw'];

    // Create a new Team object
    $team = new Team(1, $teamName);

    // Redirect to calender.php
    header("Location: calender.php");
    exit;
}
?>
<form method="post">
    <div class="container">
        <h1>Create a UTeam for UConnect</h1>
        <p>Please fill in this form to create a UTeam.</p>
        <hr>

        <label for="tname"><b>Team Name</b></label>
        <input type="text" placeholder="Enter Team Name" name="tname" id="tname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <p>By creating a team you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have a team? <a href="teamJoin.php">Join a UTeam</a>.</p>
    </div>
</form>
</body>
</html>
