<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("db_config.php");

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        header("Location: register.php");
        exit();
    }

    $name = mysqli_real_escape_string($conn, $name);
    $phone = mysqli_real_escape_string($conn, $phone);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $confirmPassword = mysqli_real_escape_string($conn, $confirmPassword);

    if ($password !== $confirmPassword) {
    
        header("Location: register.php");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insertQuery = "INSERT INTO persons (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$hashedPassword')";
    $insertResult = mysqli_query($conn, $insertQuery);

    if ($insertResult) {
    
        header("Location: login.php");
        exit();
    } else {
     
        die("Query failed: " . mysqli_error($conn));
    }

    mysqli_close($conn);
} else {
   
    header("Location: register.php");
    exit();
}
?>
