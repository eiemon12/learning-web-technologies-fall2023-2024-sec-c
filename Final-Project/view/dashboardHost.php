<?php
       require_once('../controller/sessionCheckHost.php');
       require_once('../model/db.php');
       require_once('../model/userModel.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <style>
        /* Reset some default browser styles */
        body,
        h1,
        h2,
        h3,
        p,
        table {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0; /* Set a background color */
        }

        header {
            background-color: #333; /* Set background color for the header */
            color: #fff; /* Set text color for the header */
            padding: 10px; /* Add padding to the header */
        }

        header img {
            max-width: 100%; /* Make sure the logo doesn't exceed its container */
        }

        ul {
            list-style: none; /* Remove list bullet points */
            padding: 0;
        }

        ul li {
            margin-bottom: 10px; /* Add margin between list items */
        }

        ul a {
            text-decoration: none;
            color: #333; /* Set text color for links in the navigation */
            display: block;
            padding: 8px;
            transition: background-color 0.3s; /* Smooth transition for background color */
        }

        ul a:hover {
            background-color: #ddd; /* Change background color on hover */
        }

        h2 {
            margin: 20px; /* Add margin to the heading */
        }

        footer {
            background-color: #333; /* Set background color for the footer */
            color: #fff; /* Set text color for the footer */
            padding: 10px; /* Add padding to the footer */
            text-align: center; /* Center-align text in the footer */
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
                                Logged
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
                            <h4> Host Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboardHost.php">Dashboard</a></li>
                                <li><a href="">User Profile</a></li>
                                <li><a href="HostProfile.php"> Profile</a></li>
                                <li><a href="HostEdit.php">Edit Profile</a></li>
                                <li><a href="HostPicture.php">Change Profile Picture</a></li>
                                <li><a href="settingHost.php">Settings</a></li>
                                <li><a href="tc.php">Terms and Condition</a></li>
                                <li><a href="blog.php">Write Blog and Advices</a></li>
                                <li><a href="eventManagement.php">Write Event Management</a></li>
                                <li><a href="success.php">Success Story</a></li>
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
                <h2>
                    <b>
                        &nbsp;&nbsp;&nbsp;Welcome to Host Dashboard. our esteemed matrimonial platform, dedicated to facilitating meaningful connections.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With a focus on compatibility and shared values, we provide a sophisticated space for individuals seeking a committed,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long-term relationship. Embark on this journey with us, where professionalism meets matters of the heart.<br>
                    </b>
                </h2>
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
