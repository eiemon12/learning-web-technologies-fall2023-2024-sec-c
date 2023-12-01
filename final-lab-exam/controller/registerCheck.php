<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $conPass = $_REQUEST['conPass'];
    $name = $_REQUEST['name'];
    $userType = $_REQUEST['userType'];


    if($userId == "" || $password == "" || $conPass=="" || $name == "" || $userType==""){
        echo "null username/password/email!";
    }else{
        $user = [
                    'userId'=> $userId, 
                    'password'=>$password,
                    'conPass'=>$conPass, 
                    'name'=>$name,
                    'userType'=>$userType
                ];
        
        $_SESSION['user'] = $user;
        header('location: ../view/login.php');
    }
?>