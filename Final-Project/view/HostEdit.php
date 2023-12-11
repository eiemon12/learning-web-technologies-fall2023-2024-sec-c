<?php

require_once('../controller/sessionCheckHost.php'); // This line requires the sessionCheck.php file, which checks if the user is logged in.
require_once('../model/userModel.php'); // This line requires the userModel.php file, which contains the functions for managing users.

//$id = $_GET['id']; // This line gets the ID of the user from the URL query string.
$user = getUser($_SESSION['id']); // This line calls the getUser() function from the userModel.php file to get the user with the given ID from the database.


?>


<html>

<head>
    <title>Edit Profile</title>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td align="right">
                                Logged in 
                                <a href="index.php"></a>|
                                
                            </td>
                        </tr>
                    </table>
                </header>
            </td>





        </tr>
        <tr>
            <td width="220px">
                <table height="100%" width="100%" border="0" cellspacing="0">
                    <tr>
                        <td height="200px">
                            <h4>Host Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboardHost.php">Dashboard</a></li>
                                <li><a href="">User Profile</a></li>
                                <li><a href="HostProfile.php"> Profile</a></li>
                                <li><a href="HostEdit.php">Edit Profile</a></li>
                                <li><a href="HostPicture.php">Change Profile Picture</a></li>
                                <li><a href="HostChangePassword.php">Change Password</a></li>
                                <li><a href="">Write Blog and Advices</a></li>
                                <li><a href="">Write Event Management</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>


                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </td>
            <td>
                <form method="post" action="../controller/HostEditCheck.php" enctype="">
                    <fieldset>
                        <legend>
                            <b>Edit Profile</b>
                        </legend>
                        <table width="100%">
                            <input type="hidden" name="id" value="<?= $user['id']  ?>" 
            
                            <tr>
                                <td>Name</td>
                                <td>:<input type="name" name="username" value="<?=$user['username']  ?>" />
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<input type="email" name="email" value="<?=$user['email']  ?>" />
                                    
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:<input type="text" name="gender" value="<?=$user['gender']  ?>" />
                                    
                                    
                                </td>

                            </tr>
                    

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>:<input type="text" name="phoneNumber" value="<?=$user['phoneNumber']  ?>" />
                                
                                    
                                </td>


                            </tr>



                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="submit" value="submit" name="submit" />

                                </td>
                                <td>

                            </tr>



                        </table>
                    </fieldset>
                </form>
            </td>

        </tr>

        <tr height="40px">
            <td colspan="2" align="center">

                <footer>
                    <a href="">About Us<br></a>
                    <a href="">Helpline<br></a>
                    <a href="">FAQ<br></a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>
