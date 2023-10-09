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
                <a href="../C/login.php">Logout</a> &emsp;</h3>
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
                <fieldset>
                    <legend><h3>PROFILE</h3></legend>
                    <table>
                        <tr>
                            <td width="250">
                                Name &emsp;&emsp;&emsp;&emsp; :<?php if(isset($_SESSION["name"])){echo $_SESSION["name"];}?><hr>
                                Email &emsp; &emsp;&emsp;&emsp; :<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}?><hr>
                                Gender&emsp;&emsp;&emsp;&emsp;: <?php if(isset($_SESSION["gender"])){echo $_SESSION["gender"];}?><hr>
                                Date of Birth &ensp;&emsp;:<?php if(isset($_SESSION["dd"])){echo $_SESSION["dd"],"/",$_SESSION["mm"],"/",$_SESSION["yyyy"];}?><hr>
                                <a href="../G/editProfile.php">Edit Profile</a>
                            </td>
                            <td>
                                <img src="../profile.PNG" alt=""><br>
                                <a href="../H/changeProPic.php">Change</a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
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