<?php
    
    require_once('../controller/sessionCheckUser.php');
    require_once('../model/db.php');
    require_once('../model/userModel.php');
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

        h2 {
            margin: 20px;
            color: #333;
        }

        footer {
            margin-top: 20px;
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
                <h2>
                    <b>
                        &nbsp;&nbsp;&nbsp;Welcome to General User Dashboard. Our esteemed matrimonial platform, dedicated to facilitating meaningful connections.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With a focus on compatibility and shared values, we provide a sophisticated space for individuals seeking a committed,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long-term relationship. Embark on this journey with us, where professionalism meets matters of the heart.<br>
                    </b>
                </h2>
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
