<?php
    require_once('../controller/sessionCheckAdmin.php');
    require_once('../model/db.php');
    require_once('../model/userModel.php');
    $user = getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                                    <li><a href="dashboardAdmin.php">Dashboard</a></li>
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
                <form>
                    <fieldset>
                        <legend>
                            <b>Profile</b>
                        </legend>
                        <table width="100%">

                            <tr>
                                <td>Name</td>
                                <td>:
                                    <?php echo $user['username']; ?>
                                </td>
                                <td width="200px" rowspan="4" align="center">

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
                                    <?php echo $user['email']; ?>
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
                                    <?php echo $user['gender']; ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>:
                                    <?php echo $user['phoneNumber']; ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
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
