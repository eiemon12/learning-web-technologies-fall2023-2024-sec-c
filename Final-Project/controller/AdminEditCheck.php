<?php
require_once("../model/userModel.php");
require_once("../controller/sessionCheckAdmin.php");

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$id = $_SESSION['userid'];
$gender = $_REQUEST['gender'];
$phoneNumber = $_REQUEST['phoneNumber'];

$user = ['username' => $username, 'email' => $email, 'gender'=>$gender, 'phoneNumber'=>$phoneNumber, "id" => $id];
updateUser($user);
header("location: ../view/AdminViewUsers.php");
?>

    