<?php
require_once('../controller/sessionCheck.php');
?>
<!-- HTML -->
<html>
  <head>
    <title>Change Profile Picture</title>
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
        h5,
        h4 {
            margin: 0;
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

        input[type="file"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Additional styles for profile picture */
        img {
            max-width: 100px;
            max-height: 100px;
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
        <form action="../controller/uploadImage.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>PROFILE PICTURE</legend>
            <table>
                <tr>
                    <td>
                    <?php
                        // Display the uploaded image from the database if available
                        if (isset($_SESSION['uploaded_image'])) {
                            echo '<img src="' . $_SESSION['uploaded_image'] . '" alt="pfp" style="width: 80px;">';
                        } else {
                            echo '<img src="img/profile-user.png" alt="pfp" style="width: 80px;">';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                  <td>
                  <input type="file" name="image" id="image">
                  </td>
                
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td><input type="submit" name="submit" value="Upload Image"></td>
                </tr>
            </table>
        </fieldset>
    </form>
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