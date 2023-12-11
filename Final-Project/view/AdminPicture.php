<?php
    require_once('../controller/sessionCheckAdmin.php'); // This line requires the sessionCheck.php file, which checks if the user is logged in.
    require_once('../model/userModel.php'); // This line requires the userModel.php file, which contains the functions for managing users.
    $data= getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        header img {
            width: 50px; /* Adjust the size as needed */
            height: auto;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        fieldset {
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
        }

        hr {
            border: 1px solid #ddd;
        }

        form {
            margin-top: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td align="right">
                                Logged in
                            </td>
                        </tr>
                    </table>
                </header>
            </td>
        </tr>

        <tr>
            <td width="220px">
                <table height="100%" width="100%" border="0" cellspacing="0">
                    <tr>
                        <td height="200px">
                            <h4>Admin Account</h4>
                            <hr width="200px">
                            <nav>
                                <ul>
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li><a href="AdminProfile.php"> Profile</a></li>
                                    <li><a href="AdminEdit.php">Edit Profile</a></li>
                                    <li><a href="AdminPicture.php">Change Profile Picture</a></li>
                                    <li><a href="AdminChangePassword.php">Change Password</a></li>
                                    <li><a href="AdminViewUsers.php">Manage User </a></li>
                                    <li><a href="AdminDeleteUser.php">Delete Profile</a></li>
                                    <li><a href="HostSalary.php">Salary Sheet</a></li>
                                    <li><a href="">Recent CV's</a></li>
                                    <li><a href="">Manage Host</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </td>

            <td>
                <form method="post" action="../controller/AdminPictureCheck.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend>
                            <b>Change Profile Picture</b>
                        </legend>
                        <table width="100%">

                            <tr>
                                <td>
                                    <img src="../upload/<?php echo $data['image']; ?>" alt="pfp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="file" name="myfile" value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Submit" name="submit" />
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr height="40px">
            <td colspan="2" align="center">
                <footer>
                    Copyright &copy; 2017
                </footer>
            </td>
        </tr>
    </table>
</body>

</html>
