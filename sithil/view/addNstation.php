<?php
    require_once('../model/modelView.php');
    require_once('../controller/sessionCheck.php');
    //require_once('../controller/cookieCkeck.php');
    
    if(isset($_REQUEST['btn'])){
        
        $stationName = $_REQUEST['stationName'];
        $city = $_REQUEST['city'];
        $contactNumber = $_REQUEST['contactNumber'];
        $location = $_REQUEST['location'];

        $con= getConnection();
        $sql = "INSERT INTO station (stationName, city, contactNumber, location) VALUES ('$stationName', '$city', '$contactNumber', '$location')";

        mysqli_query($con,$sql);
        header('location: viewStation.php');
    }
?>

<!-- HTML -->
<html>
  <head>
    <title>Edit Station</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        nav {
            padding: 10px;
        }

        h1, h5 {
            margin: 0;
        }

        td {
            padding: 10px;
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

        footer {
            text-align: center;
            margin-top: 10px;
        }

        form {
            width: 50%;
            margin: auto;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            margin-bottom: 10px;
            display: block;
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

        input[type="reset"] {
            padding: 10px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
            background-color: #f44336;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="reset"]:hover {
            background-color: #d32f2f;
        }
        input {
          width: 100%;
          padding: 8px;
          margin: 5px 0;
          box-sizing: border-box;
          transition: background-color 0.3s ease;
        }

        input:hover {
          background-color: #f5f5f5;
        }
        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
     <script>
        function validateForm() {
            var stationName = document.forms["stationForm"]["stationName"].value;
            var city = document.forms["stationForm"]["city"].value;
            var contactNumber = document.forms["stationForm"]["contactNumber"].value;
            var location = document.forms["stationForm"]["location"].value;

            var errorMessage = document.getElementById("errorMessage");

            // Check if the phone number starts with (13,14,15,16,17,18,19) and  exactly 10 digits
            var phoneRegex = /^(13|14|15|16|17|18|19)\d{8}$/;
            

            if (stationName === "" || city === "" || location === "") {
                errorMessage.innerHTML = "All fields must be filled out";
                return false;
            } 
            else if (!phoneRegex.test(contactNumber)) {
                errorMessage.innerHTML = "Invalid phone number format. It should start with (13,14,15,16,17,18,19) and be exactly 10 digits.";
                return false;
            }
            else {
                errorMessage.innerHTML = "";
                return true;
            }
           
        }
    </script>
  </head>
  <body>
    <table
    border="2"
      align="center"
      width="1080px"
    >
     
    <tr>
      <td align="left" colspan="2">
          <nav>
            <h1>Train Station System</h1>
            <h5>A Complete Application for Railway Train System</h5>
          </nav>
          
      </td>
    </tr>
      <tr>
        <td align="right" colspan="2">
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
        <td style="padding-bottom: 100px; ">
          <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
          Dashboard
          </h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="viewStation.php">View Station</a></li>
            <li><a href="editStation.php">Edit Station</a></li>
            <li><a href="feedback.php">Review Feedback</a></li>
            <li><a href="application.php">View Applicants</a></li>
          </ul>
        </td>
        <td style="padding: 80px">
          <fieldset>
            <legend>Add New Station</legend>
            <form name="stationForm" action="" method="post" onsubmit="return validateForm()">
                
                   Station Name  : <input type="text" value="" name="stationName" ><br>
                   City          : <input type="text" value="" name="city" ><br>
                   Contact Number: <input type="number" value="" name="contactNumber" ><br>
                   Location      : <input type="text" value="" name="location" ><br>
                   <div id="errorMessage" class="error-message"></div><br>
                   <input type="submit" name="btn" value="Submit" />
                   <input type="reset" name="rst" value="Reset" />
                </form>
              
          </fieldset>
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