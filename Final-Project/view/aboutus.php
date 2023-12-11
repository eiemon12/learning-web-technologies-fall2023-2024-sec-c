<?php
    session_start();
    require_once('../model/aboutModel.php');
    if(isset($_REQUEST['about'])){
       
        $about=$_REQUEST['about'];
        $value = insertabout($about);
        if($value){
            header('location: aboutus.php');
        }
        else{
            echo 'invalid';
        }
    }
   
 
 ?>

<html lang="en">
<head>
    <title>ABOUT US</title>
</head>
<body>
    
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
                                <a href="view/login.php">login</a>|
                                <a href="view/registration.php">Registration</a></h4>
                            </td>
                           
                        </tr>
                    </table>
                   
                </td>
            </tr>




            <!-- body -->

            <tr>
                <td height="300">
                    <table width="100%" height="100%">
                        <tr>
                            <td>
                                <h3>Post aboutus</h3>
                                <h3>
                                <form action="aboutus.php" method="post">
                                    <textarea rows="2" cols="50" name="about" placeholder="Post about here.."></textarea><br>
                                    <input type="submit" value="Submit">
                                </form>
                                </h3>
                            </td>
                            <td>
                                <h2>about</h2>
                                <?php
                                    $con=getconnection();
                                    $sql="select * from about";
                                    $result=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<table with='100%'><tr><td>".$row['abt']."</td></tr></table>";
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
                        <a href="t&c.html">Terms & Conditions</a> |
                        <a href="privacyPolicy.html">Privacy Policy</a> |
                        <a href="viewabout.php">About Us</a><br>
                        Copyright &copy; 2023
            </tr>


       </table>
    
   </body>
</html>