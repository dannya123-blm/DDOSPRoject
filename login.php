<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GeeksforGeeks Registration</title>
    <link rel="stylesheet" href="Whiteboard.css">
</head>

<body>
<div class="main">

    <h1>Sign In for UConnect</h1>

    <h3>Enter your login credentials</h3>

    <form action="">
        <label for="first">
            Username:
        </label>
        <input type="text"
               id="first"
               name="first"
               placeholder="Enter your Username" required>

        <label for="password">
            Password:
        </label>
        <input type="password"
               id="password"
               name="password"
               placeholder="Enter your Password" required>
        <div class="wrap">
            <button type="submit"
                    onclick="solve()">
                Submit
            </button>
        </div>
    </form>
    <p>Not registered?
        <a href="register.html"
           style="text-decoration: none;">
            Create an account
        </a>
    </p>
</div>
</body>
</html>