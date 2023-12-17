<?php 
    session_start();
    require_once('../model/modelView.php');
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $conPass = $_REQUEST['conPass'];
    $userType = $_REQUEST['userType'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

     //functions
     function isPassValid($password){
        $specialChar=['@','#','$','%'];
        if(strlen($password) >= 4){
            for($i=0;$i<strlen($password);$i++){
                if(in_array($password[$i] , $specialChar)){
                    return true;
                }
            }
        }
        return false;
    }

    //conditions

    if( isPassValid($password) && $password==$conPass){

        $value = registration($name,$email,$username,$password,$userType,$gender,$dob);
        
        if($value){
            header('location: ../view/login.php');
        }
        else{
            echo 'invalid';
        }
    }
    else{
        echo 'error!';
    }
?>