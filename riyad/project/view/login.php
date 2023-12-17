<html>
<html lang="en">
<head>
    <title>Login Page</title>
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
        input[type="password"],
        input[type="submit"],
        input[type="reset"] {
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
        function validateLoginForm() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;

            // Check if the username is not empty
            if (username === "") {
                alert("Please enter your username.");
                return false;
            }

            // Check if the password is not empty
            if (password === "") {
                alert("Please enter your password.");
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
                        <form name="loginForm" action="../controller/loginCheck.php" method="post" onsubmit="return validateLoginForm()">
                                <fieldset>
                                    <legend>LogIn</legend>
                                    <table>
                                        <tr>
                                            <td>Username</td>
                                            <td>:</td>
                                            <td><input type="text" name="username" value="" placeholder="Enter your username" /></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="password" value="" placeholder="Enter your password" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" name="btn" value="Submit" />
                                                <input type="reset" name="rst" value="Reset" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <a href="forgotpass.php">Forgot Password</a>
                                                <br><br>
                                                Don't have an Account?<br>
                                                <a href="registration.php">Register Now</a>
                                            </td>
                                        </tr>  
                                    </table>
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