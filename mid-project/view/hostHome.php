             <!-- Top Bar -->
<html>
    <head>
        <title>Host Home Page</title>
    </head>
    <body>
        <table border="1" align="center" width="1080px">
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
                                <h2>Logged In As: Host</h2>
                            </td>
                            <td width="60%">
                                <h2>Give Us Rating</h2>
                                <form method="post" action="../controller/r&rCheck.php">
                                    <h3>
                                    Username
                                    <input type="text" name="username" required><br>
                                    <label for="rating">Rate(1-5):</label>
                                    <input type="number" name="rating" min="1" max="5" required><br>
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