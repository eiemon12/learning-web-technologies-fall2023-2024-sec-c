<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username==$_SESSION["username"]){
            setcookie('flag', 'true', time()+3000, '/');
            header("location: ../E/loggedInDash.php");
        }    
        else{
            echo "Invalid username or password. Please try again.";
        }
    }
    
?>

<html lang="en">
<head>
    <title>LOG IN</title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="0" height="65%" width="100%">
        <tr>
            <td colspan="3" height="15%" align="right">
                <img align="left" src="../xCompany.PNG" alt="">
                <h3><a href="../A/publicHome.php">Home</a> |
                <a href="../C/login.php">Login</a> |
                <a href="../B/registration.php">Registration</a> &emsp;</h3>
            </td>
        </tr>
        <tr>
            <td width="20%" style="border-right: 0;">&emsp;</td>
            <td width="60%" style="border-left: 0;border-right: 0;">
                <form action="../C/login.php" method="post">
                    <fieldset>
                        <legend><h3>LOGIN</h3></legend>
                        <table>
                            <tr>
                                <td>User Name  </td>
                                <td>: <input type="text" name="username" value="" required><br></td>
                            </tr>
                            <tr>
                                <td>Password  </td>
                                <td>: <input type="password" name="password" value="" required></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="checkbox" type="" value=""> Remember Me <br><br>
                        <input type="submit" name="submit" value="Submt">
                        <a href="../D/forgotPass.php">Forgot Password?</a>
                    </fieldset>
                </form>
            </td>
            <td width="20%" style="border-left: 0;">&emsp;</td>
        </tr>
        <tr>
            <td colspan="3" align="center" height="10%"> 
                <h4>Copyright &copy;2017</h4>
            </td>
        </tr>
    </table>
</body>
</html>