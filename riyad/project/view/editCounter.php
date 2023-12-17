<?php
    require_once('../controller/sessionCheck.php');
    require_once('../model/db.php');
    $id= "";
    $name = "";
    $email = "";
    $counterNo = "";
    $phone = "";
    $location = "";

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id=$_GET['id'];
        $con=getConnection();
        $sql=" select * from counter where id=$id";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_assoc($result);

        $name = $row['name'];
        $email = $row['email'];
        $counterNo = $row['counterNo'];
        $phone = $row['phone'];
        $location = $row['location'];
    }
    else{
        //post method
        $id= $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $counterNo = $_POST['counterNo'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];

        $con=getConnection();
        $sql = "UPDATE counter " .
                "SET name='$name', email='$email', counterNo='$counterNo', phone='$phone', location='$location' " .
                "WHERE id=$id";
        mysqli_query($con,$sql);
        header('location: counter.php');
    }
?>
    

<!-- HTML -->
<html>
<html lang="en">
<head>
    <title>Edit Counter Page</title>
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

        form {
            margin-bottom: 20px;
        }

        fieldset {
            margin-top: 20px;
        }

        legend {
            font-weight: bold;
            color: #009688;
        }

        input[type="submit"], input[type="reset"] {
            padding: 10px;
            background-color: #009688;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #00796b;
        }

        input[type="number"], input[type="text"], input[type="email"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
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
                    <a href="counter.php">Back</a>
                </nav>
            </td>
        </tr>

    <!-- Top Bars (end) -->

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
                                <fieldset>
                                    <legend>Edit Counter</legend>
                                    <form action="editCounter.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <table>
                                        <tr>

                                            <td>Counter Number</td>
                                            <td>:</td>
                                            <td><input type="number" name="counterNo" value="<?php echo $counterNo; ?>" placeholder="Valid Counter Number" required/></td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Counter Name" required /></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td><input type="number" name="phone" value="<?php echo $phone; ?>" placeholder="+880...." required/></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td><input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter valid mail" required/></td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>:</td>
                                            <td><input type="text" name="location" value="<?php echo $location; ?>" placeholder="Enter Location" required/></td>
                                        </tr>
                                        
                                    </table>
                                   
                                    <input type="submit" name="btn" value="Submit" />
                                    <input type="reset" name="rst" value="Reset" />
                                </fieldset>
                            </form>
                                    </fieldset>
                            </td>
                        </tr>
                    </table>
            </td>    
        </tr> 

      <tr align="center">
        <td colspan="2">
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