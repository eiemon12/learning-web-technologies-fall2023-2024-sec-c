<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <center>
        <form  method="post" action="../controller/registerCheck.php" enctype="">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend><h3>REGISTRATION</h3></legend>
                            Name<br/><input type="text" name="name" value=""><br/>
                            Contact<br/><input type="number" name="contact" value=""><br/>
                            Username<br/><input type="text" name="username" value=""><br/>
                            Password<br/><input type="password" name="password" value=""><br/>
                            Confirm Password<br/><input type="password" name="conPass" value=""><br/>
                            User Type<hr/>
                            <input type="radio" name="userType" value="employee" />Employee
                            <input type="radio" name="userType" value="admin"/>Admin
                            <hr/>
                            <input type="submit" value="Sign Up">
                            <a href="login.php">Sign In</a>
                        </fieldset>
                    </td>
                </tr>                                
            </table>
        </form>
        </center>	
    </body>
</html>