<?php 
    session_start();
    if(!isset($_COOKIE['flag'])){
        header('location: ../A/publicHome.php');
    }
?>

<html lang="en">
<head>
    <title>LOGGED IN DASHBOARD</title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="0" height="80%" width="100%">
        <tr>
            <td colspan="2" height="15%" align="right">
                <img align="left" src="../xCompany.PNG" alt="">
                <h3>Logged in as <a href="../E/loggedInDash.php"><?php if(isset($_SESSION["name"])){echo $_SESSION["name"];}?></a> |
                <a href="../C/login.php">Logout <?php setcookie('flag', 'true', time()-10, '/');
    header('location: ../A/publicHome.php');?></a> &emsp;</h3>
            </td>
        </tr>
        <tr>
            <td width="30%">
                <h3>&emsp;Account<hr width="95%"></h3>
                <ul>
                    <h4>
                    <li><a href="../E/loggedInDash.php">Dashboard</a></li>
                    <li><a href="../F/viewProfile.php">View Profile</a></li>
                    <li><a href="../G/editProfile.php">Edit Profile</a></li>
                    <li><a href="../H/changeProPic.php">Change Profile Picture</a></li>
                    <li><a href="../I/changePass.php">Change Password</a></li>
                    <li><a href="../C/login.php">Logout</a></li>
                    </h4>
                </ul>
            </td>
            <td width="70%">
                <h1>Welcome <?php if(isset($_SESSION["name"])){echo $_SESSION["name"];}?></h1>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" height="10%"> 
                <h4>Copyright &copy;2017</h4>
            </td>
        </tr>
    </table>
</body>
</html>