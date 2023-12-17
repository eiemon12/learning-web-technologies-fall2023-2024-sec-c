<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

    h1 {
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

    #error-container {
      color: red;
    }

    nav a {
      text-decoration: none;
      color: #333;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #4CAF50; 
    }

    footer {
      margin-top: 10px;
    }
  </style>
 <script>
  function validateForm(event) {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;
    var errorContainer = document.getElementById("error-container");

    errorContainer.innerHTML = "";
    if (username.trim() === "") {
      errorContainer.innerHTML = "Username cannot be empty";
      event.preventDefault(); 
      return false;
    }
    if (password.trim() === "") {
      errorContainer.innerHTML = "Password cannot be empty";
      event.preventDefault(); 
      return false;
    }
  }
</script>

</head>

<body>
  <table border="1" >

    <tr height="60">
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

    <tr>
      <td>
      <form id="loginForm" action="../controller/loginCheck.php" method="post" onsubmit="validateForm(event)">
          <fieldset>
            <legend>LOGIN</legend>
            <table>
              <tr>
                <td>Username </td>
                <td>:</td>
                <td><input type="text" name="username" value="" ></td>
              </tr>
              <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" name="password" value=""></td>
              </tr>
            </table>
            <hr>
            <table>
              
              <tr>
                <td><div id="error-container"></div></td>
              </tr>
              <tr>
                <td><a href="forgetPass.php">Forgot Password?</a></td>
                <td></td>
                <td><input type="submit" name="btn" value="Submit"></td>
              </tr>
            </table>
          </fieldset>
        </form>
      </td>
    </tr>

    <tr align="center" height="40">
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
