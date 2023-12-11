<?php
require_once('../controller/sessionCheckUser.php');
require_once('../model/userModel.php');

$user = getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

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

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        hr {
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <table>
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt=""> Logged in
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
                                <li><a href="changePassword.php">Change Password</a></li>
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
                <form id="editForm" method="post" action="../controller/editCheck.php">
                    <fieldset>
                        <legend><b>Edit Profile</b></legend>
                        <table width="100%">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>" />

                            <tr>
                                <td>Name</td>
                                <td>:<input type="text" id="username" name="username" value="<?= $user['username'] ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<input type="email" id="email" name="email" value="<?= $user['email'] ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>

                            <tr>
                                <td>Phone Number</td>
                                <td>:<input type="text" id="phoneNumber" name="phoneNumber" value="<?= $user['phoneNumber'] ?>" /></td>
                            </tr>

                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" value="Submit" name="submit" onclick="return validateForm()" />
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
    <script>
        function validateForm() {
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let phoneNumber = document.getElementById('phoneNumber').value;

            if (isEmpty(username)) {
                alert('Username cannot be empty');
                return false;
            }

            if (isEmpty(email)) {
                alert('Email cannot be empty');
                return false;
            }

            if (isEmpty(phoneNumber)) {
                alert('Phone Number cannot be empty');
                return false;
            }

            // Validate username
            if (!isValidUsername(username)) {
                alert('Invalid Username. Please check the requirements.');
                return false;
            }

            // Validate phone number
            if (!isValidPhoneNumber(phoneNumber)) {
                alert('Invalid Phone Number. Please try again.');
                return false;
            }

            // Call the Ajax function
            submitForm();

            // Prevent form submission
            return false;
        }

        function isEmpty(value) {
            return value === '';
        }

        function isValidUsername($username) {
    // Username must contain at least two characters
    if (strlen($username) < 2) {
        return false;
    }

    // Username can contain alphanumeric characters, period, dash, or underscore only
    for ($i = 0; $i < strlen($username); $i++) {
        $char = $username[$i];
        if (!((ctype_alnum($char) || $char === '.' || $char === '-' || $char === '_'))) {
            return false;
        }
    }

    return true;
}

function isValidPhoneNumber($phoneNumber) {
    // Specific phone number validation
    return strlen($phoneNumber) === 11 && $phoneNumber[0] === '0' && $phoneNumber[1] === '1';
}

        function submitForm() {
            let xhttp = new XMLHttpRequest();
            let formData = new FormData(document.getElementById('editForm'));

            xhttp.open('POST', '../controller/editCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(formData);

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                }
            };
        }
    </script>
</body>

</html>
