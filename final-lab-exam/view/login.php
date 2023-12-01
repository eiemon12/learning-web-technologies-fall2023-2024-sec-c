<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center>
            <form method="post" action="../controller/loginCheck.php">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <fieldset>
                                <legend><h3>LOGIN</h3></legend>
                                Username<br/>
                                <input type="text" name="username"><br/>                               
                                Password<br/>
                                <input type="password" name="password" >
                                <br /><hr/>
                                <input type="button" name="btn" value="Login">
                                <a href="register.php">Register</a>
                            </fieldset>
                        </td>
                    </tr>                                
                </table>
            </form>
        </center>
    </body>
</html>
