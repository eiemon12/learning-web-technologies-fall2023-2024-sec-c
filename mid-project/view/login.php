             <!-- Top Bar -->
<html>
    <head>
        <title>Login Page</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        td {
            padding: 10px;
        }

        h1 {
            margin: 0;
        }

        h5 {
            margin-top: 5px;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin: 0 10px;
        }

        a:hover {
            color: #ff6600;
        }

        form {
            margin: 20px 0;
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
        }

        legend {
            font-weight: bold;
            font-size: 18px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        footer {
            margin-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
        }

        nav a:hover {
            color: #ff6600;
        }
    </style>

    
    </head>
    <body>
        <table border="1" align="center" width="100%" height="100%">
            <tr height="70">
                <td>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="img/logo.png" alt="" height="60" width="60">
                            </td>
                            <td align="right">
                                <h1>Matrimonial Service</h1>
                                <h5>An Application of searching pair</h5>
                            </td>
                            
                        </tr>
                    </table>
                   
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a href="publicHome.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="registration.php">Registration</a> |
                    <a href="contactUs.php">Contact Us</a>       
                </td>
            </tr> 

                <!-- Body -->
            <tr>
                <td>
                    <form action="../controller/loginCheck.php" method="post" enctype="">
                        <fieldset>
                            <legend>LOGIN</legend>
                            <table>
                                <tr>
                                    <td>Username </td>
                                    <td>:</td>
                                    <td><input type="text" name="username" value="" required></td>
                                </tr>
                                <tr>
                                    <td>Password </td>
                                    <td>:</td>
                                    <td><input type="password" name="password" value="" required></td>
                                </tr>
                            </table>
                            <hr>
                            <table>
                                <tr><input type="checkbox">Remember Me</tr>
                                <tr><br><br></tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" value="Submit"></td>
                                    </td>
                                    <td>
                                        <input type="reset" name="reset" value="Reset"></td>
                                    </td>
                                    <td>
                                        <a href="forgetPass.php">Forgot Password?</a></td>
                                    <td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </td>
            </tr>

                <!-- Footer -->

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