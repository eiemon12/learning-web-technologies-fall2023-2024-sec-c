<?php
    // session_start();
    require_once('../model/termsModel.php'); 
 ?>

<html lang="en">
<head>
    <title>TERMS AND CONDITIONS</title>
</head>
<body>
    <form>
      <table border="1" align="center" width="1080px">
            

      <!-- top bar -->

            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="wed.png" alt="" height="60" width="60">
                            </td>

                            <td align="center">
                                <h2>Bibah.com</h2>
                            </td>

                            <td align="right">
                                <h4><a href="index.php">Home</a> |
                                <a href="login.php">login</a>|
                                <a href="registration.php">Registration</a></h4>
                            </td>
                           
                        </tr>
                    </table>
                   
                </td>
            </tr>




            <!-- body -->

            <tr>
                <td height="300">
                    <table width="100%" height="100%">
                        <tr align="center">
                            <td>
                                <h2>TERMS AND CONDITIONS</h2>
                                <?php
                                //   require_once('../model/userModel.php');
                                    $con=getconnection();
                                    $sql="select * from terms";
                                    $result=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<table with='100%'><tr><td>".$row['term']."</td></tr></table>";
                                    }
                 
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
           





            <!-- bottom bar -->

            <tr align="center">
                <td>
                        <a href="viewT&C.php">Terms & Conditions</a> |
                        <a href="privacyPolicy.html">Privacy Policy</a> |
                        <a href="aboutUs.html">About Us</a><br>
                        Copyright &copy; 2023
            </tr>


       </table>
    </form>
   </body>
</html>