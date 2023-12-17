<?php
require_once('../controller/sessionCheck.php');
?>

<!-- HTML -->
<html>
<head>
  <title>Admin Dashboard</title>
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

    nav {
      padding: 10px;
    }

    h1, h5 {
      margin: 0;
    }

    td {
      padding: 10px;
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

    footer {
      margin-top: 10px;
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

    <!-- Top Bars (end) -->

    <tr>
      <td style="padding-bottom: 100px;">
        <h4>Dashboard</h4>
        <hr>
        <ul>
          <li><a href="viewStation.php">View Station</a></li>
          <li><a href="editStation.php">Edit Station</a></li>
          <li><a href="feedback.php">Review Feedback</a></li>
          <li><a href="applicantion.php">View Applicants</a></li>
        </ul>
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
