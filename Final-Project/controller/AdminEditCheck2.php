<?php
    require_once("../model/userModel.php");
    require_once('../controller/sessionCheckAdmin.php');

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $id = $_SESSION['id'];
    $gender = $_REQUEST['gender'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    
    $user = ['username' => $username, 'email' => $email, 'gender'=>$gender, 'phoneNumber'=>$phoneNumber, "id" => $id];
    updateUser($user);
    header("location: ../view/dashboardAdmin.php");

    // if(isset($_REQUEST['submit']))
    // {
    //     $username = $_REQUEST['username'];
    //     $email = $_REQUEST['email'];

    //     $updateUser = ['username'=>$username, 'email'=>$email, 'id' => $_SESSION['id'] ];

    //     //$student = ['id'=>1,'name'=>'alamin', 'cgpa'=>3.5];

    //     updateUser($updateUser);

    // }

?>