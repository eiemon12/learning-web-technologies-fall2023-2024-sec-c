<?php 
    session_start();
    require_once('../model/modelView.php');
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $conPass = $_REQUEST['conPass'];
    $userType = $_REQUEST['userType'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];


    //conditions

    if(isPassValid($password) && $password==$conPass){

        $value = registration($name,$email,$username,$password,$userType,$gender,$dob);
        
        if($value){
            header('location: ../view/login.php');
        }
        else{
            echo 'invalid';
        }
    }
    else{
        echo 'Error! Please try again.';
    }
?>