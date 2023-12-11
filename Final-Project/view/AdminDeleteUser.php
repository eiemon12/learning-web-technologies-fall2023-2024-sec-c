<?php 
    require_once('../controller/sessionCheckAdmin.php');
    require_once('../model/userModel.php');
    $users = getAllUser();
?>

<html lang="en">

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

        table.dashboard {
            width: 100%;
            border-collapse: collapse;
        }

        table.dashboard th,
        table.dashboard td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table.dashboard th {
            background-color: #f2f2f2;
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
                                <img src="your_logo.jpg" alt="Your Logo">
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
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="dashboard">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>Password</th>
                        <th>PhoneNo</th>
                        <th>Gender</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>

                    <?php for ($i = 0; $i < count($users); $i++) { ?>
                        <tr>
                            <td><?= $users[$i]['id'] ?></td>
                            <td><?= $users[$i]['username'] ?></td>
                            <td><?= $users[$i]['email'] ?></td>
                            <td><?= $users[$i]['password'] ?></td>
                            <td><?= $users[$i]['phoneNumber'] ?></td>
                            <td><?= $users[$i]['gender'] ?></td>
                            <td><?= $users[$i]['role'] ?></td>

                            <td>
                                <a href="AdminUserDelete.php?id=<?= $users[$i]['id'] ?>"> DELETE </a>
                            </td>

                        </tr>
                    <?php } ?>
                </table>

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

