<?php
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";
        
    }else if($username == $_SESSION['userInfo']['username'] &&  $password== $_SESSION['userInfo']['password']){
        $_SESSION['flag'] = "true";
        echo "valid User.";

    }else{
        echo "invaid user!";
    }
?>

<html lang="en">
<head>
    <title>LOG IN</title>
</head>
<body>
    <form action="" method="">
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
            <a href="forgotPass.php">Forgot Password?</a>
        </fieldset>
    </form>
</body>
</html>