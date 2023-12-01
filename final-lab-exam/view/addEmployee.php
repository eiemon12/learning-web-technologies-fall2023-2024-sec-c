<?php
    require_once('../controller/sessionCheck.php')
?>
<html>
    <head>
        <title>Add New Employee</title>
    </head>
    <body>
        <table border="1" align="center" width="100%" height="100%">
            <tr>
                <td width="30%">
                    <a href="viewEmployee.php">View Employee</a><br>
                    <a href="searchEmployee.php">Search Employee</a><br>
                    <a href="../controller/logout.php">Logout</a><br>
                    <a href="adminHome.php">Back</a>
                </td>
                <td width="70%">
                <center>
        <form  method="post" action="../controller/registerCheck.php" enctype="">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend><h3>Add New Employee</h3></legend>
                            Name<br/><input type="text" name="name" value=""><br/>
                            Contact<br/><input type="number" name="contact" value=""><br/>
                            Username<br/><input type="text" name="username" value=""><br/>
                            Password<br/><input type="password" name="password" value=""><br/>
                            Confirm Password<br/><input type="password" name="conPass" value=""><br/>
                            User Type<hr/>
                            <input type="radio" name="userType" value="employee" />Employee
                            <hr/>
                            <input type="submit" value="Sign Up">
                            <a href="login.php">Sign In</a>
                        </fieldset>
                    </td>
                </tr>                                
            </table>
        </form>
        </center>
                </td>
            </tr>
        </table>
    </body>
</html>