<?php
  
  require_once('../model/db.php');
  require_once('../controller/sessionCheck.php');
?>

<!-- HTML -->

<!DOCTYPE html>
<html>

<head>
  <title>View Station</title>
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

    h1,
    h5 {
      margin: 0;
    }

    td {
      padding: 10px;
    }

    th {
      background-color: #4CAF50;
      color: white;
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

    fieldset {
      margin: 20px;
      padding: 20px;
    }

    legend {
      font-size: 1.2em;
      font-weight: bold;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>

<body>
  <table border="2" align="center" width="1080px">

    <tr>
      <td align="left" colspan="2">
        <nav>
          <h1>Train Station System</h1>
          <h5>A Complete Application for Railway Train System</h5>
        </nav>
      </td>
    </tr>
    <tr>
  <td align="right" colspan="2" style="text-align: right;">
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
      <td style="padding-bottom: 100px; ">
        <h4>Dashboard</h4>
        <hr>
        <ul>
          <li><a href="viewStation.php">View Station</a></li>
          <li><a href="editStation.php">Edit Station</a></li>
          <li><a href="feedback.php">Review Feedback</a></li>
          <li><a href="application.php">View Applicants</a></li>
        </ul>
      </td>
      <td style="padding: 20px;">
        <fieldset>
          <legend>View Station</legend>
          <table>
            <tr>
              <th>Station Name</th>
              <th>City</th>
              <th>Contact Number</th>
              <th>Location</th>
            </tr>
            <?php
            $con = getconnection();
            $sql = "select * from station";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
              echo "<tr><td>" . $row['stationName'] . "</td><td>" . $row['city'] . "</td><td>" . $row['contactNumber'] . "</td><td>" . $row['location'] . "</td></tr>";
            }

            ?>
          </table>
        </fieldset>
      </td>
    </tr>

    <tr align="center">
  <td colspan="2" style="text-align: center;">
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
