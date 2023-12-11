<?php

    require_once('../model/termsModel.php');
    require_once('../controller/sessionCheckHost.php');
    if(isset($_REQUEST['terms'])){
       
        $terms=$_REQUEST['terms'];
        $value = insertterms($terms);
        if($value){
            header('location: tc.php');
        }
        else{
            echo 'invalid';
        }
    }
   
 
 ?>

<html lang="en">
<head>
    <title>TERMS AND CONDITIONS</title>
    <script>
        function validateTermsForm() {
            var termsContent = document.forms["termsForm"]["terms"].value;
            if (termsContent.trim() === "") {
                alert("Terms and conditions must not be empty");
                return false;
            }
        }
    </script>
</head>
<body>
    <table width="100%"  height="100%" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="your_logo.jpg" alt="Your Logo"> Logged in
                            </td>
                            <td align="right">
                                <a href="searchBar.php">Search Bar</a> |
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
                            <h4>General User Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboardGeneralUser.php">Dashboard</a></li>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="picture.php">Change Profile Picture</a></li>
                                <li><a href="setting.php">Settings</a></li>
                                <li><a href="rating.php">Give Rating</a></li>
                                <li><a href="review.php">Write Review</a></li>
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
            <h3>Post term</h3>
                                <h3>
                                <form action="tc.php" method="post" name="termsForm" onsubmit="return validateTermsForm()">
                                    <textarea rows="2" cols="50" name="terms" placeholder="Post T@C here.."></textarea><br>
                                    <input type="submit" value="Submit">
                                </form>
                                </h3>
            <h2>TERMS AND CONDITIONS</h2>
                                <?php
                                  //require_once('../model/userModel.php');
                                    $con=getconnection();
                                    $sql="select * from terms";
                                    $result=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<table with='100%'><tr><td>".$row['term']."</td></tr></table>";
                                    }
                 
                                ?>

            
            </td>
        </tr>

        <tr height="40px">
            <td colspan="2" align="center">
                <footer>
                    <a href="">About Us</a>
                    <a href="">Helpline</a>
                    <a href="">FAQ</a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>

    </table>

</body>

</html>