<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $confirmpassword=$_REQUEST['confirmpassword'];
       
        function isPassValid($password){
            $specialChar=['@','#','$','%'];
            if(strlen($password) >= 8){
                for($i=0;$i<strlen($password);$i++){
                    if(in_array($password[$i] , $specialChar)){
                        return true;
                    }
                }
            }
            return false;
        }

        function isUsernameValid($username){
            $alowedChar= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789._-';
            if(strlen($username >=2)){
                for($i=0;i< strlen($username);$i++){
                    $char=$username[$i];
                    if(strpos($alowedChar,$char)==false){
                        return false;
                    }
                }
                return false;
            }
        }

        if($name==""||$email==""||$username==""||$password==""||$confirmpassword==""){
            echo "Null user info";
        }
        else if($password== isPassValid($password) && $password==$confirmpassword && $username==isUsernameValid($username) ){
           $userInfo = [
                'name' => $name,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'confirmpassword' => $confirmpassword
           ];
            
            $_SESSION['userInfo']=$userInfo;
            header('location: login.php');
        }
        else{
           echo "Please input correct Information" ;
        }
        
    }
?>

<html lang="en">
<head>
    <title>REGISTRATION</title>
</head>
<body>
    <form action="" method="post">
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
</body>
</html>