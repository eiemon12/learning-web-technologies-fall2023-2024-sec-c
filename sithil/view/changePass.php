<?php
require_once('../controller/sessionCheck.php');
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
        input {
          width: 100%;
          padding: 8px;
          margin: 5px 0;
          box-sizing: border-box;
          transition: background-color 0.3s ease;
        }

        input:hover {
          background-color: #f5f5f5;
        }
        input[type="text"],
        input[type="number"],
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
            color: #f00;
            margin-top: 10px;
        }
    </style>
    <script>
    function validateForm() {
        var currentPass = document.forms["passwordChangeForm"]["currentPass"].value;
        var newPass = document.forms["passwordChangeForm"]["newPass"].value;
        var retypedPass = document.forms["passwordChangeForm"]["retypedPass"].value;

        var errorContainer = document.getElementById("error-container");
        errorContainer.innerHTML = ""; // Clear previous error messages

        if (currentPass.trim() === "") {
            displayError("Current Password must be filled out");
            return false;
        }

        if (newPass.trim() === "") {
            displayError("New Password must be filled out");
            return false;
        }

        if (retypedPass.trim() === "") {
            displayError("Retype New Password must be filled out");
            return false;
        }

        if (newPass !== retypedPass) {
            displayError("New Password and Retype New Password do not match");
            return false;
        }

        return true;
    }

    function displayError(errorMessage) {
        var errorContainer = document.getElementById("error-container");
        var errorParagraph = document.createElement("p");
        errorParagraph.className = "error-message";
        errorParagraph.textContent = errorMessage;
        errorContainer.appendChild(errorParagraph);
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
            <form method="post" action="../controller/passCheck.php" name="passwordChangeForm" onsubmit="return validateForm()">
                    <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                        <table>
                            <tr>
                                <td>Current Password </td>
                                <td>:</td>
                                <td><input type="password" name="currentPass" value=""></td>
                            </tr>
                            <tr>
                                <td style="color: green;">New Password </td>
                                <td>:</td>
                                <td><input type="password" name="newPass" value=""></td>
                            </tr>
                            <tr>
                                <td style="color: red;">Retype New Password </td>
                                <td>:</td>
                                <td><input type="password" name="retypedPass" value=""></td>
                            </tr>
                        </table>
                        <hr>
                        <div id="error-container" class="error-message"></div>
                        <table>
                            <tr>
                                <td><input type="submit" name="btn" value="Submit"></td>
                                <td><input type="reset" name="btn" value="Reset"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
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


