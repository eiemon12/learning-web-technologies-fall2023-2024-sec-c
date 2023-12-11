<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <script src="ajax.js"></script>
</head>
<body>
    <h2>Login</h2>
    <form id="loginForm" action="authenticate.php" method="post">
        Email: <input type="text" name="email" id="email"><br>
        Password: <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</body>
</html>
