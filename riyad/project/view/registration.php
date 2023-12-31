<html>
<html lang="en">
<head>
    <title>Registration Page</title>
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

        h1, h5, legend {
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

        fieldset {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        input[type="date"],
        input[type="submit"],
        input[type="reset"],
        input[type="radio"] {
            padding: 10px;
            margin: 5px;
        }

        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        /* Apply styles to the links */
        a {
            text-decoration: none;
            color: #009688;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["registrationForm"]["name"].value;
            var email = document.forms["registrationForm"]["email"].value;
            var username = document.forms["registrationForm"]["username"].value;
            var phone = document.forms["registrationForm"]["phone"].value;
            var password = document.forms["registrationForm"]["password"].value;
            var conPass = document.forms["registrationForm"]["conPass"].value;
            var userType = document.forms["registrationForm"]["userType"].value;
            var gender = document.forms["registrationForm"]["gender"].value;
            var dob = document.forms["registrationForm"]["dob"].value;

            // Check if all required fields are filled out
            if (name === "" || email === "" || username === "" || phone === "" || password === "" || conPass === "" || userType === "" || gender === "" || dob === "") {
                alert("All fields are required. Please fill out all required fields.");
                return false;
            }

            // Validate phone number
            var phonePattern = /^(13|14|15|16|17|18|19)\d{8}$/;
            if (!phonePattern.test(phone)) {
                alert("Please enter a valid phone number starting with 13-19 and exactly 10 digits");
                return false;
            }

            // Validate password
            var passwordPattern = /^(?=.*[@#$%])(?=.*[a-zA-Z0-9]).{4,8}$/;
            if (!passwordPattern.test(password)) {
                alert("Password must contain 4 to 8 characters, including at least one special character (@, #, $, %)");
                return false;
            }

            return true; // If all validations pass, allow the form to be submitted
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
            <td align="center">
                <nav>
                    <a href="../index.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="registration.php">Registration</a> |
                    <a href="deals&offers.php">Deals/Offers</a> |
                    <a href="counters.php">Counters</a> |
                    <a href="contactUs.php">Contact Us</a>
                </nav>
            </td>
        </tr>
<!--Header End -->

        <tr>
            <td>
                <table align="center">
                    <tr>
                        <td>
                        <form name="registrationForm" action="../controller/registerCheck.php" method="post" onsubmit="return validateForm()">
        
                                <fieldset>
                                    <legend>REGISTRATION</legend>
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
                                                <input type="radio" name="userType" value="employee"/> Employee
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
                                    <br><br>
                                    Don't have an Account?<br>
                                    <a href="login.php">Login Now</a>
                                </fieldset>
                            </form>
                        </td>
                    </tr>
                </table>
                
            </td>
        </tr>
<!--Body End -->
        <tr height="45" align="center">
            <td>
                <nav>
                    <a href="view/refundPolicy.php">Refund Policy</a> |
                    <a href="view/facilities.php">Facilities</a> |
                    <a href="view/faq.php">FAQ</a> |
                    <a href="view/t&c.php">Terms & Conditions</a> |
                    <a href="view/privacyPolicy.php">Privacy Policy</a> |
                    <a href="view/aboutUs.php">About Us</a>
                </nav>
                <footer>Copyright &copy; 2023</footer>
            </td>
        </tr>
    </table>
</body>
</html>