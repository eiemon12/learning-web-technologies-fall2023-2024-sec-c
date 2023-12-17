<!-- HTML -->
<html>
  <head>
    <title>Registration</title>
    <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px; /* Added margin for better spacing */
  }

  nav {
    padding: 10px;
  }
  nav a {
      text-decoration: none;
      color: #333;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #4CAF50; 
    }
  h1, h5 {
    margin: 0;
  }

  form {
    width: 50%;
    margin: auto;
  }

  fieldset {
    margin: 20px 0;
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

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  input[type="reset"] {
    background-color: #f44336;
    color: white;
    cursor: pointer;
  }

  input[type="reset"]:hover {
    background-color: #d32f2f;
  }

  #error-container {
    color: red;
  }
</style>
<script>
  function validateForm() {
    var name = document.forms["registrationForm"]["name"].value;
    var email = document.forms["registrationForm"]["email"].value;
    var username = document.forms["registrationForm"]["username"].value;
    var password = document.forms["registrationForm"]["password"].value;
    var conPass = document.forms["registrationForm"]["conPass"].value;
    var userType = document.forms["registrationForm"]["userType"];
    var gender = document.forms["registrationForm"]["gender"];
    var dob = document.forms["registrationForm"]["dob"].value;
    var errorContainer = document.getElementById("error-container");

    // Reset error message
    errorContainer.innerHTML = "";

    // Check if any field is empty
    if (name.trim() === "" || email.trim() === "" || username.trim() === "" || password.trim() === "" || conPass.trim() === "" || dob.trim() === "") {
      errorContainer.innerHTML = "All fields must be filled out";
      return false;
    }

    // Check if the password and confirm password match
    if (password !== conPass) {
      errorContainer.innerHTML = "Password and Confirm Password must match";
      return false;
    }

    // Check if password length is at least 4 characters
    if (password.length < 4) {
      errorContainer.innerHTML = "Password must be at least 4 characters long";
      return false;
    }

    // Check if password contains at least one special character
    var specialChars = ['@', '#', '$', '%'];
    var hasSpecialChar = false;
    for (var i = 0; i < password.length; i++) {
      if (specialChars.includes(password[i])) {
        hasSpecialChar = true;
        break;
      }
    }

    if (!hasSpecialChar) {
      errorContainer.innerHTML = "Password must contain at least one special character (@, #, $, %)";
      return false;
    }

    // Check if a user type is selected
    var selectedUserType = false;
    for (var i = 0; i < userType.length; i++) {
      if (userType[i].checked) {
        selectedUserType = true;
        break;
      }
    }
    if (!selectedUserType) {
      errorContainer.innerHTML = "Please select a User Type";
      return false;
    }

    // Check if a gender is selected
    var selectedGender = false;
    for (var i = 0; i < gender.length; i++) {
      if (gender[i].checked) {
        selectedGender = true;
        break;
      }
    }
    if (!selectedGender) {
      errorContainer.innerHTML = "Please select a Gender";
      return false;
    }

    // If everything is valid, the form will be submitted
    return true;
  }
</script>
  </head>
  <body>
    <table
    border="2"
      align="center"
      width="1080px"
    >
     
    <tr>
      <td align="left">
          <nav>
            <h1>Train Station System</h1>
            <h5>A Complete Application for Railway Train System</h5>
          </nav>
          
      </td>
    </tr>
      <tr>
        <td align="right">
          <nav>
            <a href="publicHome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a> |
            <a href="deals&offers_pub.php">Deals/Offers</a> |
            <a href="counters.php">Counters</a> |
            <a href="contactUs.php">Contact Us</a>
          </nav>
        </td>
      </tr> 

    <!-- Top Bars (end) -->

      <tr>
        <td>
        <form name="registrationForm" action="../controller/registrationCheck.php" method="post" enctype="" onsubmit="return validateForm()">
            <fieldset>
              <legend>REGISTRATION</legend>
              <table>
                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td><input type="text" name="name" value="" /></td>
                </tr>

                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><input type="email" name="email" value="" /></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><input type="text" name="username" value="" /></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><input type="password" name="password" value="" /></td>
                </tr>
                <tr>
                  <td>Confirm Password</td>
                  <td>:</td>
                  <td><input type="password" name="conPass" /></td>
                </tr>
                
              </table>
              <hr />
              <table>
                <tr>
                
                  
                  <fieldset>
                    <legend>User Type</legend>
                    <input type="radio" name="userType" value="admin"/> Admin
                    <input type="radio" name="userType" value="employee"/> Employee
                    <input type="radio" name="userType" value="customer"/> Customer
                    </fieldset>
                
                
                
                </tr>
                <tr>
                  <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="Male" /> Male
                    <input type="radio" name="gender" value="Female" /> Female
                    <input type="radio" name="gender" value="Other" /> Other
                  </fieldset>
                </tr>
                <tr>
                  <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="date" name="dob" value="" />
                  </fieldset>
                </tr>
              </table>
              <hr />
              
                <div id="error-container"></div>
              
              <input type="submit" name="btn" value="Submit" />
              <input type="reset" name="rst" value="Reset" />
            </fieldset>
          </form>
        </td>
      </tr>

      <tr align="center">
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