<?php
require_once('../controller/sessionCheckAdmin.php');
require_once('../model/userModel.php');

$id = $_GET['id'];
$_SESSION['userid'] = $id;
$user = getUser($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }

        td {
            vertical-align: top;
            padding: 10px;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        header a:hover {
            background-color: #555;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        hr {
            border-top: 1px solid #ddd;
        }

        footer {
            margin-top: 20px;
        }
    </style>

    <script>
        function validateForm() {
            var username = document.forms["editForm"]["username"].value;
            var email = document.forms["editForm"]["email"].value;
            var gender = document.forms["editForm"]["gender"].value;
            var phoneNumber = document.forms["editForm"]["phoneNumber"].value;

            if (username == "" || email == "" || gender == "" || phoneNumber == "") {
                alert("All fields must be filled out");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <img src="your_logo.jpg" alt="Your Logo">
                    Logged in as
                    <a href="index.php">Username</a> |
                </header>
            </td>
        </tr>
        <tr>
            <td width="220px">
                <h4>Admin Account</h4>
                <hr width="200px">
                <ul>
                    <li><a href="dashboardAdmin.php">Dashboard</a></li>
                    <li><a href="AdminProfile.php">Profile</a></li>
                    <li><a href="AdminEdit.php">Edit Profile</a></li>
                    <li><a href="AdminPicture.php">Change Profile Picture</a></li>
                    <li><a href="AdminChangePassword.php">Change Password</a></li>
                    <li><a href="AdminViewUsers.php">Manage User</a></li>
                    <li><a href="AdminDeleteUser.php">Delete Profile</a></li>
                    <li><a href="HostSalary.php">Salary Sheet</a></li>
                    <li><a href="#">Recent CV's</a></li>
                    <li><a href="#">Manage Host</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>
            <td>
                <form name="editForm" method="post" action="../controller/AdminEditCheck.php" onsubmit="return validateForm()">
                    <fieldset>
                        <legend><b>Edit Profile</b></legend>
                        <table width="100%">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>" />

                            <tr>
                                <td>Name</td>
                                <td>:<input type="name" name="username" value="<?= $user['username'] ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<input type="email" name="email" value="<?= $user['email'] ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:<input type="text" name="gender" value="<?= $user['gender'] ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>:<input type="text" name="phoneNumber" value="<?= $user['phoneNumber'] ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" value="Submit" name="submit" />
                                </td>
                                <td></td>
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
