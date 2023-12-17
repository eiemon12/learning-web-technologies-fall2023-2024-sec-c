<?php
require_once('../controller/sessionCheck.php');
?>

<!-- HTML -->
<html>
<head>
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
      margin-top: 20px;
    }
    .header{
      position: fixed;
    }
    nav {
      padding: 10px;
    }

    h1, h5 {
      margin: 0;
    }

    td {
      padding: 10px;
    }

    h2 {
      margin: 30px 65px;
    }

    p {
      margin: 30px 65px;
    }

    img {
      margin-right: 50px;
    }

    footer {
      margin-top: 10px;
    }

    a {
      text-decoration: none;
      color: #333;
      transition: color 0.3s ease;
    }

    a:hover {
      color: #4CAF50; 
    }
  </style>
</head>

<body>
  <table border="2" align="center" width="1080px">

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
          <a href="adminHome.php">Home</a> |
          <a href="adminDash.php">Dashboard</a> |
          <a href="viewProfile.php">View Profile</a> |
          <a href="../controller/logout.php">Logout</a>
        </nav>
      </td>
    </tr>

    <tr>
      <td style="padding-bottom: 100px">
        <h2>Welcome Home</h2>

        <p>
          We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes! Trains are wonderful. To travel by train is to see nature and human beings, towns and churches, and rivers, in fact, to see life. Our goal is to make your life easier from the traditional system. Kothin.com is a complete Rail project that can manage a whole system through online. Hopefully, you will have a great experience through our system.
        </p>

        <h2>Top Routes and Destinations</h2>

        <nav>
          <table>
            <tr>
              <td>
                <img src="img/train_1.jpg" alt="image_1" width="260px" height="180px">
              </td>
              <td>
                <img src="img/train_2.jpg" alt="image_2" width="260px" height="180px">
              </td>
              <td>
                <img src="img/train_3.jpg" alt="image_3" width="260px" height="180px">
              </td>
            </tr>
            <tr>
              <td>Rajdhani Express</td>
              <td>Satabdi Express</td>
              <td>Tejas Express</td>
            </tr>
            <tr>
              <td><strong>Dhaka to Kamalapur</strong></td>
              <td><strong>Chittagong to Sylhet</strong></td>
              <td><strong>Noakhali to Dhaka</strong></td>
            </tr>
          </table>
        </nav>
        <br>

        <h2>Train Station Management System</h2>

        <nav>
          <table>
            <tr>
              <td><h4>Search</h4></td>
              <td><h4>Select</h4></td>
              <td><h4>Checkout</h4></td>
            </tr>
            <tr>
              <td>
                <img src="img/search.png" alt="search_icon" width="190px" height="190px">
              </td>
              <td>
                <img src="img/select.png" alt="select_icon" width="190px" height="190px">
              </td>
              <td>
                <img src="img/receipt.png" alt="receipt_icon" width="190px" height="190px">
              </td>
            </tr>
            <tr>
              <td>
                <p style="margin-top: 15px">Choose your origin, destination, journey dates and search for trains</p>
              </td>
              <td>
                <p>Select your desired trip and choose the class</p>
              </td>
              <td>
                <p>Receive your E-receipt and save it</p>
              </td>
            </tr>
          </table>
          <br>
          <table align="center">
            <tr>
              <nav>
                <a href="refundPolicy_cus.php">Refund Policy</a> |
                <a href="facilities_cus.php">Facilities</a> |
                <a href="faq_cus.php">FAQ</a>
              </nav>
            </tr>
          </table>
        </nav>
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
