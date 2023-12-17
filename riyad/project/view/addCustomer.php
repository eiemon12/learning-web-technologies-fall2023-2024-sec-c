<?php

    require_once('../controller/sessionCheck.php');
    require_once('../model/userModel.php');
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $phone = $_REQUEST['phone'];
        $password = $_REQUEST['password'];
        $conPass = $_REQUEST['conPass'];
        $userType = $_REQUEST['userType'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];

        //Functions for validation
        function isPassValid($password){
            $specialChar=['@','#','$','%'];
            if(strlen($password) >= 4){
                for($i=0;$i<strlen($password);$i++){
                    if(in_array($password[$i] , $specialChar)){
                        return true;
                    }
                }
            }
            return false;
        }

        function isPhoneValid($phone){
            if (strlen($phone) === 10) {
                $prefix = substr($phone, 0, 2); 
                $allowedPrefixes = ['13', '14', '15', '16', '17', '18', '19'];
                if (in_array($prefix, $allowedPrefixes)) {
                    return true;
                }
            }
            return false;
        }

        //conditions

        if(isPassValid($password) && isPhoneValid($phone) && $password==$conPass){

            $value = registration($name,$email,$username,$phone,$password,$userType,$gender,$dob);
            
            if($value){
                header('location: customer.php');
            }
            else{
                echo 'invalid';
            }
        }
        else{
            echo 'Error! Please try again.';
        }
    }
?>

<html>
<html lang="en">
<head>
    <title>Add Customer Page</title>
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

        input[type="number"], input[type="text"], input[type="email"], input[type="password"], input[type="radio"], input[type="date"] {
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
        function validateAddCustomerForm() {
            var name = document.forms["addCustomerForm"]["name"].value;
            var email = document.forms["addCustomerForm"]["email"].value;
            var username = document.forms["addCustomerForm"]["username"].value;
            var phone = document.forms["addCustomerForm"]["phone"].value;
            var password = document.forms["addCustomerForm"]["password"].value;
            var conPass = document.forms["addCustomerForm"]["conPass"].value;
            var gender = document.forms["addCustomerForm"]["gender"].value;
            var dob = document.forms["addCustomerForm"]["dob"].value;

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

            // Check if the phone is not empty and meets conditions
            if (phone === "" || !isPhoneValid(phone)) {
                alert("Please enter a valid phone number starting with 13-19 and exactly 10 digits.");
                return false;
            }

            // Check if the password is not empty and meets conditions
            if (password === "" || !isPasswordValid(password)) {
                alert("Please enter a password with 4 digits and a special character (@, #, $, %).");
                return false;
            }

            // Check if the confirm password matches the password
            if (conPass !== password) {
                alert("Passwords do not match. Please re-enter the password.");
                return false;
            }

            // Check if the gender is selected
            if (!gender) {
                alert("Please select a gender.");
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

        function isPasswordValid(password) {
            var specialChars = ['@', '#', '$', '%'];
            if (password.length >= 4) {
                for (var i = 0; i < password.length; i++) {
                    if (specialChars.includes(password[i])) {
                        return true;
                    }
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
                    <a href="employeeHome.php">Back</a>
                </nav>
            </td>
        </tr>
        
<!--Header End -->

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
                        <table align="center">
                    <tr>
                        <td>
                        <form name="addCustomerForm" action="addCustomer.php" method="post" onsubmit="return validateAddCustomerForm()">
                                <fieldset>
                                    <legend>Add New Customer</legend>
                                    <table>
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td><input type="text" name="name" value="" placeholder="Enter your full name"  /></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td><input type="email" name="email" value="" placeholder="Enter your valid mail" /></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>:</td>
                                            <td><input type="text" name="username" value="" placeholder="Enter a username" /></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td><input type="number" name="phone" value="" placeholder="+880...." /></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="password" value="" placeholder="4 digits & a spacial character" /></td>
                                        </tr>
                                        <tr>
                                            <td>Confirm Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="conPass" placeholder="Re-type your password" /></td>
                                        </tr>
                                        <tr>
                                            <td>User Type</td>
                                            <td>:</td>
                                            <td>
                                                <input type="radio" name="userType" value="customer"/> Customer
                                            </td>
                                        </tr>
                                    </table>
                                    <hr />
                                    <table>
                                        <tr>
                                            <fieldset>
                                                <legend>Gender</legend>
                                                <input type="radio" name="gender" value="Male" /> Male
                                                <input type="radio" name="gender" value="Female" /> Female
                                                <input type="radio" name="gender" value="Other" /> Other
                                            </fieldset>
                                        </tr>
                                        <tr>
                                            <fieldset>
                                                <legend>Date of Birth</legend>
                                                <input type="date" name="dob" value="" />
                                            </fieldset>
                                        </tr>
                                    </table>
                                    <hr />
                                    <input type="submit" name="btn" value="Submit" />
                                    <input type="reset" name="rst" value="Reset" />
                                </fieldset>
                            </form>
                        </td>
                    </tr>
                </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
<!--Body End -->
        <tr height="45" align="center">
            <td>
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