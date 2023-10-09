<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];
        $gender = $_REQUEST['gender'];
        $dd = $_REQUEST['dd'];
        $mm = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if($password != $confirmpassword){
            echo "Password dosen't match";
        }

        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION["username"]=$username;
        $_SESSION['password']=$password;
        $_SESSION['gender']=$gender;
        $_SESSION['dd']=$dd;
        $_SESSION['mm']=$mm;
        $_SESSION['yyyy']=$yyyy;

        header("Location: ../C/login.php");
    }
    
?>

<html lang="en">
<head>
    <title>REGISTRATION</title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="0" height="85%" width="100%">
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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <fieldset>
                        <legend><h3>REGISTRATION</h3></legend>
                        <table>
                            <tr>
                                <td>Name  </td>
                                <td>: <input type="text" name="name" value="" required></td>
                            </tr>
                            <tr>
                                <td>Email  </td>
                                <td>: <input type="email" name="email" value="" required></td>
                            </tr>
                            <tr>
                                <td>User Name  </td>
                                <td>: <input type="text" name="username" value="" required></td>
                            </tr>
                            <tr>
                                <td>Password  </td>
                                <td>: <input type="password" name="password" value="" required></td>
                            </tr>
                            <tr>
                                <td>Confirm password  </td>
                                <td>: <input type="password" name="confirmpassword" value="" required></td>
                            </tr>
                        </table>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male" required> Male
                            <input type="radio" name="gender" value="Female" required> Female
                            <input type="radio" name="gender" value="Other" required> Other
                        </fieldset><hr>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="text" name="dd" value="" size="2" required>/
                            <input type="text" name="mm" value="" size="2" required>/
                            <input type="text" name="yyyy" value="" size="4" required> <i>(dd/mm/yyyy)</i>
                        </fieldset><hr>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
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