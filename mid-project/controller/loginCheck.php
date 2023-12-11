<?php
    session_start();
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $user = login($username, $password);

    if ($user) {
        $_SESSION['username']=$username;
        header("Location: ../view/{$user['userType']}Home.php");
    } else {
        echo 'Invalid username or password';
    }

?>

