<?php
require_once 'classes/user.php';
require_once 'dbconnections.php';
include 'navbar.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for comparison with the one stored in the database
    $hashed_password = md5($password); // You should use a more secure hashing algorithm in production

    // Query the database to check if the user exists
    $query = "SELECT * FROM users WHERE Username=? AND PasswordHash=?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss", $username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User exists, fetch user details
        $row = $result->fetch_assoc();

        // Create a User object with fetched data
        $user = new User($row['UserID'], $row['Username'], $row['PasswordHash'], $row['Email']);

        // Redirect to a dashboard or another page
        header("Location: home.php");
        exit();
    } else {
        // User doesn't exist or incorrect credentials
        $error_message = "Invalid username or password.";
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
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: cornflowerblue; /* Blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff; /* White frame */
            border-radius: 10px; /* Rounded corners */
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .login-container input {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .login-container button {
            padding: 10px;
            background-color: #ffcc00; /* Yellow button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #ffd700; /* Darker yellow on hover */
        }

        .login-container p {
            text-align: center;
            margin-top: 15px;
        }

        .login-container a {
            color: #3498db; /* Blue link color */
            text-decoration: none;
            font-weight: bold;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Login</button>

        <?php
        if (isset($error_message)) {
            echo '<p style="color: red;">' . $error_message . '</p>';
        }
        ?>
    </form>
    <p>Not registered? <a href="register.php">Create an account</a></p>
</div>

</body>
</html>
