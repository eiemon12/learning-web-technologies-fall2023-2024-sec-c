<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <script src="ajax.js"></script>
</head>
<body>
    <h2>Register</h2>
    <form id="registerForm" action="register_user.php" method="post">
        Name: <input type="text" name="name"><br>
        Phone: <input type="text" name="phone"><br>
        Email: <input type="text" name="email" id="email" onblur="checkEmailAvailability(this.value)"><br>
        Password: <input type="password" name="password"><br>
        Confirm Password: <input type="password" name="confirm_password"><br>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
    <div id="emailAvailabilityMessage"></div>
</body>
</html>
