<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $userName = $_SESSION['user_name'];
    $userPhone = $_SESSION['user_phone'];
    $userEmail = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    <h2>Welcome, <?php echo $userName; ?>, to the Home Page</h2>
    <p>Your Information:</p>
    <ul>
        <li>Name: <?php echo $userName; ?></li>
        <li>Phone: <?php echo $userPhone; ?></li>
        <li>Email: <?php echo $userEmail; ?></li>
    </ul>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
