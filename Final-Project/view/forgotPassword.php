<?php

?>

<html lang="en">

<head>
    <title>Forgot-password</title>
</head>

<body>
    <table width="100%" height="100%">
        <tr height="40px">
            <header>
                <td>
                    <img src="" alt="">
                </td>
                <td align="right">
                    
                    <a href="../view/login.php">Login</a>|
                    <a href="../view/registration.php">Registration</a>
                </td>

                </td>
            </header>
        </tr>

        <tr>
            <td colspan="2" height="2px">

                <hr>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="600px" height="100%">
                        <tr>
                            <td>
                                <form action="../controller/emailCheck.php" method="post">
                                    <fieldset>
                                        <legend>
                                            Forgot Password
                                        </legend>
                                        <table width="100%">

                                            <tr>
                                                <td>Enter Email</td>
                                                <td>:
                                                    <input type="email" name="email" value="">
                                                </td>
                                            </tr>


                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit">

                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </main>
            </td>
        </tr>

        <tr height="40px">
            <td colspan="2">
                <hr>
                <footer align="center">
                    <a href="">About Us<br></a>
                    <a href="">Helpline<br></a>
                    <a href="">FAQ<br></a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>