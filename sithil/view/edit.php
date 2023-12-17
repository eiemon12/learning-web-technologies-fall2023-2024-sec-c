<?php
    require_once('../model/db.php');
    require_once('../controller/sessionCheck.php');
    $id= "";
    $name = "";
    $email = "";
    $username = "";
    $userType = "";
    $gender = "";
    $dob = "";

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id=$_GET['id'];
        $con=getConnection();
        $sql=" select * from registration where id=$id";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_assoc($result);

        $name = $row['name'];
        $email = $row['email'];
        $username = $row['username'];
        $userType = $row['userType'];
        $gender = $row['gender'];
        $dob = $row['dob'];
    }
    else{
        //post method
        $id= $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $userType = $_POST['userType'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $con=getConnection();
        $sql = "UPDATE registration " .
                "SET name='$name', email='$email', username='$username', UserType='$userType', dob='$dob' " .
                "WHERE id=$id";
        mysqli_query($con,$sql);
        header('location: viewProfile.php');
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

        fieldset {
            margin: 20px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        td {
            padding: 15px;
        }
        a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #4CAF50;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
       
        input[type="radio"] {
            padding: 10px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
            transition: background-color 0.3s ease;
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

        input[type="submit"]{
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover{
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
        var name = document.forms["editProfileForm"]["name"].value;
        var email = document.forms["editProfileForm"]["email"].value;
        var username = document.forms["editProfileForm"]["username"].value;
        var userType = document.forms["editProfileForm"]["userType"].value;
        var gender = document.forms["editProfileForm"]["gender"].value;
        var dob = document.forms["editProfileForm"]["dob"].value;

        var errorContainer = document.getElementById("error-container");
        errorContainer.innerHTML = ""; // Clear previous error messages

        if (name.trim() === "") {
            displayError("Name must be filled out");
            return false;
        }

        if (email.trim() === "") {
            displayError("Email must be filled out");
            return false;
        }

        if (username.trim() === "") {
            displayError("Username must be filled out");
            return false;
        }

        if (userType === "") {
            displayError("User Type must be selected");
            return false;
        }

        if (gender === "") {
            displayError("Gender must be selected");
            return false;
        }

        if (dob.trim() === "") {
            displayError("Date of Birth must be filled out");
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
                    <a href="../controller/logout.php">Logout</a> |
                    <a href="viewProfile.php">Back</a>
                </nav>
            </td>
        </tr>

        <tr>
            <td>
                <fieldset>
                    <legend>Edit Profile</legend>
                    <form method="post" name="editProfileForm" onsubmit="return validateForm()">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><input type="text" name="name" value="<?php echo $name; ?>"  /></td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="email" name="email" value="<?php echo $email; ?>"  /></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><input type="text" name="username" value="<?php echo $username; ?>"  /></td>
                            </tr>
                            <tr>
                                <td>Usertype</td>
                                <td>:</td>
                                <td>
                                    <input type="radio" name="userType" value="employee" <?php if($userType=="employee"){echo "checked"; }?>/> Employee
                                    <input type="radio" name="userType" value="customer" <?php if($userType=="customer"){echo "checked"; } ?>/> Customer
                                </td>
                            </tr>
                        </table>
                        <hr />
                        <table>
                            <tr>
                                <td>
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male" <?php if($gender=='Male'){echo "checked"; } ?>/> Male
                                        <input type="radio" name="gender" value="Female" <?php if($gender=='Female'){echo "checked"; } ?>/> Female
                                        <input type="radio" name="gender" value="Other" <?php if($gender=='Other'){echo "checked"; } ?>/> Other
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" name="dob" value="<?php echo $dob; ?>"  />
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                        <hr />
                        <div id="error-container" class="error-message"></div><br>
                        <input type="submit" name="btn" value="Submit" />
                        <input type="reset" name="rst" value="Reset" />
                    </form>
                </fieldset>
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

