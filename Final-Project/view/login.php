<?php

?>

<html lang="en">

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            height: 100%;
        }

        td nav a{
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border: 1px solid #333;
            background-color: #fff;
            border-radius: 5px;
        }
        td nav a:hover{
            background-color: #333;
            color: #fff;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 8px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        legend {
            font-weight: bold;
            font-size: 1.2em;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: calc(100% - 16px); 
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin: 0 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
        }

        hr {
            border: 1px solid #ddd;
        }
    </style>
</head>



<body>
    <table width="100%" height="100%">

        <tr height="60px">
            
                <td>
                    <nav>
                        <img src="" alt=""> 
                        <a href="../index.php">Back</a>
                    </nav>
                    
                </td>
                <td align="right">
                    <nav>
                        <a href="../index.php">Home</a>
                        <a href="registration.php">Registration</a>
                    </nav>
                    
                </td>
            
                      
        </tr>


        <tr>
            <td colspan="2" height="2px">

                <hr>
            </td>
        </tr>


        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="700px" >
                        <tr>
                            <td>
                                <form action="../controller/loginCheck.php" method="post" enctype="">
                                    <fieldset>

                                        <legend>
                                            Login
                                        </legend>

                                        <table width="100%">

                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <input type="text" name="username" value="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td>:
                                                    <input type="password" name="password" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                            <!-- <td colspan="2">
                                                    <input type="checkbox" name="remember[]" value='true'>Remember Me
                                                </td>
                                            </tr> -->

                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit">
                                                    <a href="../view/forgotPassword.php">Forgot Password?</a>
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


        <tr height="60px">
            <td colspan="2" align="center">
                <hr>

                <footer >
                    <a href="">About Us</a>
                    <a href="">Helpline</a>
                    <a href="">FAQ</a>
                    <a href="">Terms and Condition</a><br>
                    Copyright &copy; 2023
                </footer>

            </td>
        </tr>


    </table>

</body>

</html>