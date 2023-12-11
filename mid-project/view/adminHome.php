<?php
    session_start();
    require_once('../model/userModel.php');
    
    
?>

<!-- Top Bar -->
<html>
    <head>
        <title>Admin Home Page</title>
        


    </head>
    <body>
        <table border="1" align="center" width="100%" height="100%">
            <tr>
                <td height="65">
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="img/logo.png" alt="" height="60" width="60">
                            </td>
                            <td align="right">
                                <h1>Matrimonial Service</h1>
                                <h5>An Application of searching pair</h5>
                            </td>
                            
                        </tr>
                    </table>
                   
                </td>
            </tr>
            <tr>
                <td align="center" height="25">
                    <a href="publicHome.php">Home</a> |
                    <a href="../controller/logout.php">Logout</a> |
                   
                    <a href="contactUs.php">Contact Us</a>       
                </td>
            </tr> 

                <!-- Body -->
            
            <tr>
                <td>
                    <table width="100%" >
                        <tr>
                            <td width="30%">
                                <h3>
                                <a href="checkRatingStat.php">Check Rating Status</a><br>
                                <a href="checkReviewStat.php">Check Review Status</a><br>
                                <a href="blog.php">Blogs</a><br>
                                <a href="eventManagement.php">Event Management</a><br>
                                <a href="success.php">Success Story</a><br>
                                </h3>
                                
                            </td>

                            <td width="70%">
                                <h2>Welcome <?php /*
                                $row= login($username,$password);
                                echo $row['name'];
                                */?></h2>
                                <h2>Logged In As: Admin</h2>
                            </td>
                        </tr>
                    </table>
                </td>
                
            </tr>

                <!-- Footer -->

            <tr align="center">
                <td height="45">
                    <nav>
                        <a href="t&c.html">Terms & Conditions</a> |
                        <a href="privacyPolicy.html">Privacy Policy</a> |
                        <a href="aboutUs.html">About Us</a>
                    </nav>
                <footer>Copyright &copy; 2023</footer>
                </td>
            </tr>
        </table>
    </body>
</html>