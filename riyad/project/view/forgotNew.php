<html>
<html lang="en">
<head>
    <title>Forgot New Password Page</title>
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

        input[type="password"] {
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
                    <a href="contactUs.php">Contact Us</a> |
                    <a href="forgotpass.php">Back</a>
                </nav>
            </td>
        </tr>
<!--Header End -->

        <tr>
            <td>
                <table align="center">
                    <tr>
                        <td>
                            <form action="../controller/newPassCheck.php" method="post">
                                <fieldset>
                                    <legend>Set New Password</legend>
                                    <table>
                                        <tr>
                                            <td>New Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="password" value="" placeholder="Enter new password" required/></td>
                                        </tr>
                                        <tr>
                                            <td>Re-Type Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="conPass" value="" placeholder="Re-Type your password" required/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <input type="submit" name="btn" value="Submit" />
                                                <input type="reset" name="rst" value="Reset" />
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