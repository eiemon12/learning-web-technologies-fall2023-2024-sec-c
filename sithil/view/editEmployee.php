<?php
require_once('../controller/sessionCheck.php');
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        nav {
            padding: 10px;
        }

        h1,
        h5 {
            margin: 0;
        }

        h4 {
            margin-top: 15px;
            margin-left: 15px;
            margin-bottom: 10px;
        }

        hr {
            margin: 0 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-left: 20px;
            margin-top: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #4CAF50;
        }

        td {
            padding: 15px;
        }

        form {
            width: 70%;
            margin: auto;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        table {
            border: 1px solid #ddd;
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
        }
        .add-btn,
        a.edit-link,
        a.delete-link {
            display: inline-block;
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            color: #fff;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .add-btn, a.edit-link {
            background-color: #4CAF50;
        }

        a.delete-link {
            background-color: #f44336;
        }

        .add-btn, a.edit-link:hover {
          background-color: #45a049; 
        }
        a.delete-link:hover {
          background-color: #e53935; /* Darker red color on hover */
        }
    </style>
</head>

<body>
    <table border="2" align="center" width="1080px">
        <tr>
            <td colspan="2" align="left">
                <nav>
                    <h1>Train Station System</h1>
                    <h5>A Complete Application for Railway Train System</h5>
                </nav>
            </td>
        </tr>
        <tr>
            <td align="right" colspan="2" style="text-align: right;">
                <nav>
                    <a href="adminHome.php">Home</a> |
                    <a href="adminDash.php">Dashboard</a> |
                    <a href="viewProfile.php">View Profile</a> |
                    <a href="../controller/logout.php">Logout</a>
                </nav>
            </td>
        </tr>

        <tr>
            <td style="padding-bottom: 100px">
                <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
                    User Information
                </h4>
                <hr style="margin: 0 10px" />
                <ul style="margin-left: 20px; margin-top: 20px">
                    <li><a href="viewEmployee.php">View All Employees</a></li>
                    <li><a href="editEmployee.php">Edit Employee Profile</a></li>
                    <li><a href="viewProfile.php">Back</a></li>
                </ul>
            </td>
            <td style="padding: 80px">
                <fieldset>
                    <legend>Edit Employee</legend>
                    <a class='add-btn' href="addNew.php">ADD New Employee</a><br><br>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        require_once("../model/db.php");
                        $con = getConnection();
                        $sql = "select * from registration";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['userType'] == 'employee') {
                                echo
                                "<tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[username]</td>
                                <td>$row[gender]</td>
                                <td>$row[dob]</td>
                                <td>
                                    <a class='edit-link' href='edit.php?id=$row[id]'>Edit</a>
                                    <a class='delete-link' href='delete.php?id=$row[id]'>Delete</a>
                                </td>
                            </tr>";
                            }

                        }
                        ?>
                    </table>
                </fieldset>
            </td>
        </tr>

        <tr align="center">
  <td colspan="2" style="text-align: center;">
    <nav>
      <a href="t&c.html">Terms & Conditions</a> |
      <a href="privacyPolicy.html">Privacy Policy</a> |
      <a href="aboutUs.html">About Us</a>
    </nav>
    <footer>Copyright &copy; 2023</footer>
  </td>
</tr>
    </table>
</body>

</html>
