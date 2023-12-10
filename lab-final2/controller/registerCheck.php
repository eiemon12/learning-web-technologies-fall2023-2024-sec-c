<?php 
    session_start();
    $id = $_REQUEST['id'];
    $username = $_REQUEST['username'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $conPass = $_REQUEST['conPass'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $userType = $_REQUEST['userType'];


    if($userId == "" || $password == "" || $conPass=="" || $name == "" || $userType==""){
        echo "null username/password/email!";
    }else{
        $user = [ 
                    'username'=> $username,
                    'name'=>$name,
                    'phone'=> $id,
                    'password'=>$password,
                    'conPass'=>$conPass, 
                    'userType'=>$userType
                ];
        
        $_SESSION['user'] = $user;
        register();
        header('location: ../view/login.php');
    }
?>