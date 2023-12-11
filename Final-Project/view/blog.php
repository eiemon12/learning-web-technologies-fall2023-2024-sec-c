<?php
     require_once('../controller/sessionCheckHost.php');
    require_once('../model/blogModel.php');
    if(isset($_REQUEST['blog'])){
        
        $blog=$_REQUEST['blog'];
        $value = insertBlog($blog);
        if($value){
            header('location: blog.php');
        }
        else{
            echo 'invalid';
        }
    }
    

 ?>      
        <!-- Top Bar -->
        <!DOCTYPE html>
<html>

<head>
    <title>Blog Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        header img {
            max-width: 100%;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 8px;
            transition: background-color 0.3s;
        }

        ul a:hover {
            background-color: #ddd;
        }

        h3 {
            margin: 20px;
        }

        form textarea {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border: none;
        }

        h2 {
            margin: 20px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
    <script>
    function validateForm() {
        var blogContent = document.forms["blogForm"]["blog"].value;
        if (blogContent == "") {
            alert("Blog content must be filled out");
            return false;
        }
    }
    </script>
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
                <h3>Post Blog</h3>
                <form action="blog.php" method="post" name="blogForm" onsubmit="return validateForm()">
                    <textarea rows="2" name="blog" placeholder="Post blog here.."></textarea><br>
                    <input type="submit" value="Submit">
                </form>
                <h2>Total Blogs</h2>
                <?php
                $con = getConnection();
                $sql = "select * from bloginfo";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<table width='100%'><tr><td width='5%'>" . $row['sl'] . "</td><td>" . $row['blog'] . "</td></tr></table>";
                }
                ?>
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
