<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <a href="register.php">Registration</a>
    
    <fieldset>
        <form action="../controller/loginCheck.php" method="post" align="center">
            <legend>LOGIN</legend>
            Username: <input type="text" name="username" value=""><br><br>
            Password: <input type="password" name="password" value=""><br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </form>
    </fieldset>
    
</body>
</html>