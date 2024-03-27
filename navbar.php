<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Nav Bar</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .navbar {
            width: 80px; /* Adjust width as needed */
            height: 100vh;
            background-color: cornflowerblue;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999; /* Ensure navbar is on top of other content */
            transition: width 0.3s; /* Smooth transition for width changes */
        }

        .navbar:hover {
            width: 200px; /* Expand on hover */
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            height: 100%;
            justify-content: center; /* Center items vertically */
        }

        .navbar li {
            text-align: center;
            padding: 10px 0;
            position: relative;
        }

        .navbar a {
            text-decoration: none;
            color: #ffffff;
            font-size: 16px;
            display: block;
            transition: 0.3s;
            padding: 10px;
        }

        .navbar a:hover {
            background-color: white;
        }

        @media screen and (max-width: 768px) {
            .navbar {
                width: 100%; /* Full width on smaller screens */
                height: auto;
            }

            .navbar ul {
                flex-direction: row; /* Arrange items horizontally */
                justify-content: flex-start; /* Align items to the start */
            }

            .navbar li {
                text-align: left;
                padding: 10px 20px;
            }

            .navbar:hover {
                width: 100%; /* No expansion on smaller screens */
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="calendar.php">Calendar</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="TeamJoin.php">TeamJoin</a></li>
    </ul>
</nav>
</body>
</html>
