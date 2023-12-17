<?php 
 
  require_once('../model/db.php');
  require_once('../controller/sessionCheck.php');
  $username=$_SESSION['username'];
    if(isset($_SESSION['username'])){
        $con=getConnection();
        $sql = "SELECT * FROM registration WHERE username = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
        }
    }
    else{
        echo "error!";
    }
?>

<!-- HTML -->
<html>
  <head>
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        nav {
            padding: 10px;
        }

        h1,
        h5 {
            margin: 0;
        }

        h4 {
            margin-top: 15px;
            margin-left: 15px;
            margin-bottom: 10px;
        }

        hr {
            margin: 0 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-left: 20px;
            margin-top: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #4CAF50;
        }

        td {
            padding: 15px;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        footer {
            text-align: center;
            margin-top: 10px;
        }
    </style>
  </head>
  <body>
    <table
    border="2"
      align="center"
      width="1080px"
    >
     
    <tr>
      <td colspan="2" align="left">
          <nav>
            <h1>Train Station System</h1>
            <h5>A Complete Application for Railway Train System</h5>
          </nav>
          
      </td>
    </tr>
      <tr>
        <td colspan="2" align="right">
          <nav>
          <a href="adminHome.php">Home</a> |
            <a href="adminDash.php">Dashboard</a> |
            <a href="viewProfile.php">View Profile</a> |
            <a href="../controller/logout.php">Logout</a>
          </nav>
        </td>
      </tr> 

    <!-- Top Bars (end) -->

    <tr>
        <td style="padding-bottom: 100px">
          <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
          My Profile
          </h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="myProfile.php">View Profile</a></li>
            <li><a href="editMyProfile.php">Edit Profile</a></li>
            <li><a href="changeProPic.php">Change Profile Picture</a></li>
            <li><a href="changePass.php">Change Password</a></li>
            <li><a href="viewProfile.php">Back</a></li>
           
          </ul>
        </td>
        <td style="padding: 80px">
        <fieldset>
                                <legend>My Profile</legend>
                                <table>
                                    <tr>
                                        <td><strong>ID</strong></td>
                                        <td>:</td>
                                        <td><?php echo $row['id']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td>:</td>
                                        <td><?php echo $row['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email</strong></td>
                                        <td>:</td>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Username</strong></td>
                                        <td>:</td>
                                        <td><?php echo $row['username']; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>UserType</strong></td>
                                        <td>:</td>
                                        <td><?php echo $row['userType']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Gender</strong></td>
                                        <td>:</td>
                                        <td><?php echo $row['gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date of Birth</strong></td>
                                        <td>:</td>
                                        <td><?php echo $row['dob']; ?></td>
                                    </tr>
                                </table>
                            </fieldset><br>
                            
                            
        </td>

      </tr>

          
        

      <tr align="center">
        <td colspan="2">
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