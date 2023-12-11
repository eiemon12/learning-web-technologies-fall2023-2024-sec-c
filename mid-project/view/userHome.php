
 
 <!-- Top Bar -->
<html>
    <head>
        <title>User Home Page</title>

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

        h2 {
            margin-top: 10px;
            margin-bottom: 10px;
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
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
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
        <table border="1" align="center" width="100%">
            <tr>
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
                    <a href="../controller/logout.php">Logout</a> |
                   
                    <a href="contactUs.php">Contact Us</a>       
                </td>
            </tr> 

            <!-- Body -->
            
            <tr>
                <td height="300">
                    <table width="100%">
                        <tr>
                            <td width="40%">
                                <h2>Welcome</h2>
                                <h2>Logged In As: User</h2>
                            </td>
                            <td width="60%">
                                <h2>Give Us Rating</h2>
                                <form method="post" action="../controller/r&rCheck.php">  
                                    <input type="hidden" name="username" value="">
                                    <label for="rating">Rate(1-5):</label>
                                    <input type="number" name="rating" min="1" max="5" required><br>
                                    <input type="submit" value="Submit">
                                    </h3>
                                    <h2>Give Us Review</h2>
                               
                                    <h3>
                                    <textarea rows="4" cols="50" name="review" placeholder="Enter review here.."></textarea><br>
                                    <input type="submit" value="Submit">
                                    </h3>
                                </form>

                            </td>
                        </tr>
                    </table>
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