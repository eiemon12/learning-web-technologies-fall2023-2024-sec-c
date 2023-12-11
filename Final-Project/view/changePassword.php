<?php
   require_once('../controller/sessionCheckUser.php');

    require_once('../model/userModel.php');

    $data=getId($_SESSION['id']);
        $username=$data['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CHANGE PASSWORD</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        header img {
            max-width: 100%;
        }

        form {
            margin: 20px;
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        input[type="password"] {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border: none;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
    <script>
        function validateChangePasswordForm() {
            var currentPassword = document.forms["changePasswordForm"]["currentpassword"].value;
            var newPassword = document.forms["changePasswordForm"]["newpassword"].value;
            var retypePassword = document.forms["changePasswordForm"]["repassword"].value;

            if (currentPassword.trim() === "") {
                alert("Please enter your current password");
                return false;
            }

            if (newPassword.trim() === "") {
                alert("Please enter a new password");
                return false;
            }

            if (retypePassword.trim() === "") {
                alert("Please retype your new password");
                return false;
            }

            if (newPassword !== retypePassword) {
                alert("New password and retyped password do not match");
                return false;
            }
        }
    </script>
</head>

<body>
    <table width="100%" height="100%" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="your_logo.jpg" alt="Your Logo"> Logged in
                            </td>
                            <td align="right">
                                <a href="searchBar.php">Search Bar</a> |
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
                            <h4>General User Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboardGeneralUser.php">Dashboard</a></li>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="picture.php">Change Profile Picture</a></li>
                                <li><a href="setting.php">Settings</a></li>
                                <li><a href="rating.php">Give Rating</a></li>
                                <li><a href="review.php">Write Review</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </td>

            <td>
            <form method="post" action="../controller/changePasswordCheck.php" enctype="" name="changePasswordForm" onsubmit="return validateChangePasswordForm()">
                    <fieldset>
                        <legend>PROFILE</legend>
                        <table>
                            <tr>
                                <td>
                                    Current password:
                                </td>
                                <td>:
                                    <input type="password" name="currentpassword" value=""  />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    New password
                                </td>
                                <td>:
                                    <input type="password" name="newpassword" value=""  />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Retype New password
                                </td>
                                <td>:
                                    <input type="password" name="repassword" value=""  />
                                </td>
                            </tr>
                            <tr>
                                <td width="250">
                                    <hr>
                                    <input type="submit" name="submit" value="Submit" />
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
                    <a href="">About Us</a>
                    <a href="">Helpline</a>
                    <a href="">FAQ</a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>

    </table>

</body>

</html>
