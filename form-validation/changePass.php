<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $password=$_REQUEST['password'];
        $newPass=$_REQUEST['newPass'];
        $retypenew=$_REQUEST['retypeNew'];

        if($password==$_SESSION['userInfo']['password'] && $newPass==$retypenew){
            echo "Password change successfull";
        }
    }
?>

<html lang="en">
<head>
    <title>LOGGED IN DASHBOARD</title>
</head>
<body>
    <fieldset>
        <legend><h3>CHANGE PASSWORD</h3></legend>
        <table>
            <tr>
                <td>Current Password </td>
                <td>: <input type="password" name="password" value="" required></td>
            </tr>
            <tr>
                <td>New Password </td>
                <td>: <input type="password" name="newPass" value="" required></td>
            </tr>
            <tr>
                <td>Retype New Password </td>
                <td>: <input type="password" name="retypeNew" value="" required></td>
            </tr>
        </table><hr>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</body>
</html>