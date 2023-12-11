<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <style>
        body, h1, h2, h3, p, table {
             margin: 0;
              padding: 0; 
        }
        body { 
            font-family: 'Arial', sans-serif; 
            background-color: #f0f0f0; 
        }
        header { 
            background-color: #333; 
            color: #fff; 
            padding: 10px; 
        }
        header img { 
            max-width: 100%; 
        }
        nav ul { 
            list-style: none; 
            padding: 0; 
        }
        nav ul li { 
            margin-bottom: 10px; 
        }
        nav a { 
            text-decoration: none; 
            color: #333;
             display: block; 
             padding: 8px;
            transition: background-color 0.3s; 
        }
        nav a:hover { 
            background-color: #ddd; 
        }
        main { 
            margin: 20px; 
        }
        footer { 
            background-color: #333; 
            color: #fff; 
            padding: 10px; 
            text-align: center; 
        }
        @media (max-width: 768px) { nav ul { text-align: center; } nav a { padding: 10px; } }
    </style>
</head>

<body>
    <table width="100%" heigth="100%">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt="Logo">
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
                                    <li><a href="../controller/AdminCreateProfile.php"> Create Profile</a></li>
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
                <h2>
                    <b>
                        &nbsp;&nbsp;&nbsp;Welcome to Admin Dashboard. Our esteemed matrimonial platform, dedicated to facilitating meaningful connections.<br>
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
                    <a href="">Terms and Condition</a><br>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>
</body>
</html>
