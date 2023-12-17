<?php
require_once('../controller/sessionCheck.php');
require_once('../model/db.php');

$name = "";
$email = "";
$username = "";
$dob = "";

$username = $_SESSION['username'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $con = getConnection();
    $sql = "SELECT * FROM registration WHERE username = '$username'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        die("No data found for the given username");
    }
} else {
    // POST method
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $username = $_POST['username']; // No need to reassign
    $dob = $_POST['dob'];

    $con = getConnection();
    $sql = "UPDATE registration SET name='$name', email='$email', dob='$dob' WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Error updating record: " . mysqli_error($con));
    }

    header('location: myProfile.php');
    exit();
}
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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

        fieldset {
            margin: 20px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="reset"] {
            padding: 10px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
            background-color: #f44336;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="reset"]:hover {
            background-color: #d32f2f;
        }
        .error-message {
            color: #f44336;
            margin-top: 5px;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["editProfileForm"]["name"].value;
            var email = document.forms["editProfileForm"]["email"].value;
            var username = document.forms["editProfileForm"]["username"].value;
            var dob = document.forms["editProfileForm"]["dob"].value;

            // Clear previous error messages
            clearErrorMessages();

            // Simple validation for non-empty fields
            if (name === "") {
                displayErrorMessage("Name is required.");
                return false;
            }

            if (email === "") {
                displayErrorMessage("Email is required.");
                return false;
            }
            if (username === "") {
                displayErrorMessage("Username is required.");
                return false;
            }

            if (dob === "") {
                displayErrorMessage("Date of Birth is required.");
                return false;
            }


            return true; // Form is valid and will be submitted
        }

        function displayErrorMessage(message) {
            var errorDiv = document.getElementById("error-message");
            errorDiv.innerHTML = message;
        }

        function clearErrorMessages() {
            var errorDiv = document.getElementById("error-message");
            errorDiv.innerHTML = "";
        }
    </script>
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
            <td colspan="2" align="right">
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
                    My Profile
                </h4>
                <hr style="margin: 0 10px" />
                <ul style="margin-left: 20px; margin-top: 20px">
                    <li><a href="myProfile.php">View Profile</a></li>
                    <li><a href="editMyProfile.php">Edit Profile</a></li>
                    <li><a href="changeProPic.php">Change Profile Picture</a></li>
                    <li><a href="changePass.php">Change Password</a></li>
                    <li><a href="viewProfile.php">Back</a></li>
                </ul>
            </td>
            <td style="padding: 80px">
                <fieldset>
                    <legend>My Profile</legend>
                    <form name="editProfileForm" action="editMyProfile.php" method="post" onsubmit="return validateForm()">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><input type="text" name="name" value="<?php echo $row['name']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="email" name="email" value="<?php echo $row['email']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><input type="text" name="username" value="<?php echo $row['username']; ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="3">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" name="dob" value="<?php echo $row['dob']; ?>" />
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                <div id="error-message" class="error-message"></div><br>
                                    <input type="submit" name="btn" value="Submit" />
                                    <input type="reset" name="rst" value="Reset" />
                                </td>
                            </tr>

                        </table>
                    </form>
                </fieldset><br>
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

