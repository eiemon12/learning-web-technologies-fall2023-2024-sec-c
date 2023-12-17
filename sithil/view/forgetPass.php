<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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

        h1,
        h5 {
            margin: 0;
        }

        form {
            width: 70%;
            margin: auto;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
        }

        legend {
            font-size: 1.5em;
            font-weight: bold;
        }

        table {
            border: 1px solid #ddd;
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 15px;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            margin-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin-right: 10px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #4CAF50;
        }
    </style>
</head>

<body>
    <table border="2" align="center" width="1080px">
        <tr>
            <td align="left">
                <nav>
                    <h1>Train Station System</h1>
                    <h5>A Complete Application for Railway Train System</h5>
                </nav>
            </td>
        </tr>
        <tr>
            <td align="right">
                <nav>
                    <a href="publicHome.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="registration.php">Registration</a> |
                    <a href="deals&offers_pub.php">Deals/Offers</a> |
                    <a href="counters.php">Counters</a> |
                    <a href="contactUs.php">Contact Us</a>
                </nav>
            </td>
        </tr>

        <tr>
            <td>
                <form method="" action="" enctype="">
                    <fieldset>
                        <legend>FORGOT PASSWORD</legend>
                        <table>
                            <tr>
                                <td>Enter Email</td>
                                <td>:</td>
                                <td><input type="text" name="email" value="" required /></td>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="submit" name="btn" value="Submit" /></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr align="center">
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
