<?php
    require_once('../controller/sessionCheck.php');
    require_once('../model/db.php');
    $id= "";
    $name = "";
    $email = "";
    $username = "";
    $phone = "";
    $dob = "";

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id=$_GET['id'];
        $con=getConnection();
        $sql=" select * from user where id=$id";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_assoc($result);

        $name = $row['name'];
        $email = $row['email'];
        $username = $row['username'];
        $phone = $row['phone'];
        $dob = $row['dob'];
    }
    else{
        //post method
        $id= $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];

        $con=getConnection();
        $sql = "UPDATE user " .
                "SET name='$name', email='$email', username='$username', phone='$phone', dob='$dob' " .
                "WHERE id=$id";
        mysqli_query($con,$sql);
        header('location: customer.php');
    }
?>
    

<!-- HTML -->
<html>
<html lang="en">
<head>
    <title>Edit Customer Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h5 {
            color: #333;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            color: #009688;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        ul li a:hover {
            color: #009688;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        a {
            text-decoration: none;
            color: #009688;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            margin-bottom: 20px;
        }

        fieldset {
            margin-top: 20px;
        }

        legend {
            font-weight: bold;
            color: #009688;
        }

        input[type="submit"], input[type="reset"] {
            padding: 10px;
            background-color: #009688;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #00796b;
        }

        input[type="number"], input[type="text"], input[type="email"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="date"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin-bottom: 20px;
        }
    </style>
    <script>
        function validateEditCustomerForm() {
            var name = document.forms["editCustomerForm"]["name"].value;
            var email = document.forms["editCustomerForm"]["email"].value;
            var username = document.forms["editCustomerForm"]["username"].value;
            var phone = document.forms["editCustomerForm"]["phone"].value;
            var dob = document.forms["editCustomerForm"]["dob"].value;

            // Check if the name is not empty
            if (name === "") {
                alert("Please enter the customer's name.");
                return false;
            }

            // Check if the email is not empty and is valid 
            if (email === "") {
                alert("Please enter the customer's email.");
                return false;
            }

            // Check if the username is not empty
            if (username === "") {
                alert("Please enter the customer's username.");
                return false;
            }

            // Check if the phone is not empty and meet conditions
            if (phone === "" || !isPhoneValid(phone)) {
                alert("Please enter a valid phone number starting with 13-19 and exactly 10 digits.");
                return false;
            }

            // Check if the date of birth is not empty 
            if (dob === "") {
                alert("Please enter the customer's date of birth.");
                return false;
            }

            return true; // If all validations pass, allow the form to be submitted
        }

        function isPhoneValid(phone) {
            if (phone.length === 10) {
                var prefix = phone.substring(0, 2);
                var allowedPrefixes = ['13', '14', '15', '16', '17', '18', '19'];
                if (allowedPrefixes.includes(prefix)) {
                    return true;
                }
            }
            return false;
        }
    </script>
</head>
<body>
    <table border="1" width="100%" height="100%" align="center">
        <tr height="70">
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="../upload/logo.png" height="65" width="65" alt="">
                        </td>
                        <td align="right">
                            <h1>Railway Ticket Management System</h1>
                            <h5>A Complete Application for Railway</h5>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="20">
            <td align="right">
                <nav>
                    <a href="customer.php">Back</a>
                </nav>
            </td>
        </tr>

    <!-- Top Bars (end) -->

        <tr>
            <td>
                <table width="100%" height="90%" border="1">
                        <tr>
                            <td width="20%">
                                <ul>
                                    <li><a href="myProfile.php">My Profile</a></li>
                                    <li><a href="customer.php">Customer Info</a></li>
                                    <li><a href="counter.php">Counters</a></li>
                                    <li><a href="feedback.php">View Feedbacks</a></li>
                                    <li><a href="deals.php">Deals & Offers</a></li>
                                    <li><a href="../controller/logout.php">Logout</a></li>
                                </ul>
                            </td>
                            <td width="80%">
                                <fieldset>
                                    <legend>Edit Customer</legend>
                                    <form name="editCustomerForm" action="editCustomer.php" method="post" onsubmit="return validateEditCustomerForm()">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <table>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="name" value="<?php echo $name; ?>" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>:</td>
                                                    <td><input type="email" name="email" value="<?php echo $email; ?>" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="username" value="<?php echo $username; ?>" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>:</td>
                                                    <td><input type="number" name="phone" value="<?php echo $phone; ?>" /></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <fieldset>
                                                            <legend>Date of Birth</legend>
                                                            <input type="date" name="dob" value="<?php echo $dob; ?>" />
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr />
                                            <input type="submit" name="btn" value="Submit" />
                                            <input type="reset" name="rst" value="Reset" />`
                                        </form> 
                                    </fieldset>
                            </td>
                        </tr>
                    </table>
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