<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
        }

        legend {
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <table width="100%" height="100%">
        <tr height="60px">
            <!-- <header>
                <td>
                    <img src="" alt=""> <a href="index.php">Back</a>
                </td>
                <td align="right">
                    <a href="index.php">Home</a>|
                    <a href="login.php">Login</a>
                </td>
                </td>
            </header> -->
        </tr>
        <tr>
            <td colspan="2" height="2px">
                <!-- <hr> -->
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="700px">
                        <tr>
                            <td>
                                <form method="post" action="">
                                    <fieldset>
                                        <legend>
                                            Registration
                                        </legend>
                                        <table width="100%">
                                            <tr>
                                                <td>Name</td>
                                                <td>:
                                                    <input type="text" name="name" value="John Ahmed">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:
                                                    <input type="email" name="email" value="john@gmail.com">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone No</td>
                                                <td>:
                                                    <input type="text" name="phoneNumber" value="01332323222">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>:
                                                    <input type="text" name="Gender" value="Male">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <center><a href="../upload/Tazdik_Hossain_CV.pdf" download class="download-btn">Download
                                                    </a></center>
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
            <td colspan="2" align="center">
                <footer>
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
