<?php
session_start();
require_once('../model/modelView.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];



if (isset($_REQUEST['userType'])) {
    $userType = $_REQUEST['userType'];
}
else{
    if($username == "" || $password == ""){
        echo "null username/password!";

    }
    else { 
        $status=login($username, $password);
        if($status){ 
            $_SESSION['flag']="true";
            $users=getUser($username);
            if($users){
                if($users['userType']=='admin'){
                    $_SESSION['username']=$username;
                    header('location: ../view/adminHome.php');
                }
                else{
                    echo "usertype not recognized";
                }
                }
                else{
                echo "user not found.";
            }
        }
        else{
            echo "Falied.Invalid ID or Password.";
        }
    }
}
?>




