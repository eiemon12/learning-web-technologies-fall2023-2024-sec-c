<?php 
   require_once('../controller/sessionCheckAdmin.php');
   require_once('../model/userModel.php');
   $users = getAllUser();
?>

<?php 
   require_once('../controller/sessionCheckAdmin.php');
   require_once('../model/userModel.php');
   $users = getAllUser();
?>

<html lang="en">

<head>
    <title>Dashboard</title>
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

        header {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        header img {
            width: 50px; /* Adjust as needed */
        }

        header td {
            text-align: right;
        }

        td {
            vertical-align: top;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <table  width="100%" height="100%" cellspacing="0" cellpadding="0">
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
                <table height="100%" width="100%" cellspacing="0">
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
                                <li><a href="">Recent CV's</a></li>
                                <li><a href="">Manage Host</a></li>
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
                <table width="100%" border="1">
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

                    <?php for($i=0; $i<count($users); $i++){ ?>
                        <tr>
                            <td><?=$users[$i]['id']?></td>
                            <td><?=$users[$i]['username']?></td>
                            <td><?=$users[$i]['email']?></td>
                            <td><?=$users[$i]['password']?></td>
                            <td><?=$users[$i]['phoneNumber']?></td>
                            <td><?=$users[$i]['gender']?></td>
                            <td><?=$users[$i]['role']?></td>
            
                            <td>
                                <a href="AdminEditUser.php?id=<?=$users[$i]['id']?>">EDIT</a> 
                            </td>
                        </tr>
                    <?php } ?>
                </table> 
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

