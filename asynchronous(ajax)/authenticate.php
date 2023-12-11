<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    include("db_config.php");

    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT * FROM persons WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_phone'] = $row['phone'];
                $_SESSION['user_email'] = $row['email'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: login.php");
                exit();
            }
        } else {
            header("Location: register.php");
            exit();
        }
    } else {
        die("Query failed: " . mysqli_error($conn));
    }
    mysqli_close($conn);
} else {
    header("Location: login.php");
    exit();
}
?>
