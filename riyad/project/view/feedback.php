<?php
    require_once('../controller/sessionCheck.php');
?>

<html>
<html lang="en">
<head>
    <title>Feedback Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h5 {
            color: #333;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            color: #009688;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        ul li a:hover {
            color: #009688;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        a {
            text-decoration: none;
            color: #009688;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <table border="1" width="100%" height="100%" align="center">
        <tr height="70">
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="../upload/logo.png" height="65" width="65" alt="">
                        </td>
                        <td align="right">
                            <h1>Railway Ticket Management System</h1>
                            <h5>A Complete Application for Railway</h5>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="20">
            <td align="right">
                <nav>
                    <a href="employeeHome.php">Back</a>
                </nav>
            </td>
        </tr>
        
<!--Header End -->

        <tr>
            <td>
                <table width="100%" height="90%" border="1">
                    <tr>
                        <td width="20%">
                            <ul>
                                <li><a href="myProfile.php">My Profile</a></li>
                                <li><a href="customer.php">Customer Info</a></li>
                                <li><a href="counter.php">Counters</a></li>
                                <li><a href="feedback.php">View Feedbacks</a></li>
                                <li><a href="deals.php">Deals & Offers</a></li>
                                <li><a href="../controller/logout.php">Logout</a></li>
                            </ul>
                        </td>
                        <td width="80%">
                            <table width="100%" border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>username</th>
                                    <th>Feedback</th>                                   
                                </tr>
                                <?php
                                    require_once("../model/db.php");
                                    $con=getConnection();
                                    $sql = "select * from feedback";
                                    $result = mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_assoc($result)){
                                        
                                        echo 
                                        "<tr>
                                            <td>$row[id]</td>
                                            <td>$row[username]</td>
                                            <td>$row[feedback]</td>
                                        </tr>";}
                                ?>
                            </table> <br>
                            
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
<!--Body End -->
        <tr height="45" align="center">
            <td>
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