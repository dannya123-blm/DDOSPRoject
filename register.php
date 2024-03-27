<?php
require_once 'classes/user.php';
require_once 'dbconnections.php';

include 'navbar.php';

// Function to generate a unique user ID
function generateUserID() {
    // Generate a random 8-character alphanumeric string
    return substr(md5(uniqid(rand(), true)), 0, 8);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // As there's no confirm password field, there's no need to retrieve it here

    // Hash the password (You should use a stronger hashing method like password_hash() in production)
    $passwordHash = md5($password);

    // Generate a unique UserID
    $userID = generateUserID();

    // Create a new User object
    $user = new User($userID, $username, $passwordHash, $email);

    // Save the user to the database (Assuming you have a method to insert data into the database)
    // Example: $user->saveToDatabase();

    // Display success message or redirect to another page
    $success_message = "Registration successful!";
    // header("Location: success.php");
    // exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for UConnect</title>
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

        .register-container {
            background-color: #fff; /* White frame */
            border-radius: 10px; /* Rounded corners */
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
        }

        .register-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .register-container form {
            display: flex;
            flex-direction: column;
        }

        .register-container label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .register-container input {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .register-container button {
            padding: 10px;
            background-color: #ffcc00; /* Yellow button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-container button:hover {
            background-color: #ffd700; /* Darker yellow on hover */
        }

        .register-container p {
            text-align: center;
            margin-top: 15px;
        }

        .register-container a {
            color: #3498db; /* Blue link color */
            text-decoration: none;
            font-weight: bold;
        }

        .register-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h1>Register for UConnect</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Register</button>

        <?php
        if (isset($success_message)) {
            echo '<p style="color: green;">' . $success_message . '</p>';
        }
        ?>
    </form>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
</div>

</body>
</html>
