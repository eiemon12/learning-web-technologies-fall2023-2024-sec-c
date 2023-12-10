<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <a href="login.php">Login</a>
    <form action="registerCheck.php" method="post">
        <fieldset>
            <legend><h3>REGISTRATION</h3></legend>
            <input type="hidden" name="id">
            Username<br/><input type="text" name="username" value=""><br/>
            Name<br/><input type="text" name="name" value=""><br/>
            Phone<br/><input type="number" name="phone" value=""><br/>
            Email<br/><input type="number" name="email" value=""><br/>
            Password<br/><input type="password" name="password" value=""><br/>
            Confirm Password<br/><input type="password" name="conPass" value=""><br/>
            Gender<hr/>
            <input type="radio" name="gender" value="male" />Male
            <input type="radio" name="gender" value="female"/>Female
            <input type="radio" name="gender" value="other"/>Other
            <hr/>
            Date of Birth<br/><input type="date" name="dob" value=""><br/><br>
            <input type="hidden" value="student" name="userType">
            <input type="submit" value="Register">
            <input type="reset" value="Reset">
        </fieldset>
    </form>
</body>
</html>