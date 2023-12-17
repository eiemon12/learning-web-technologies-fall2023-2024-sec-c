<?php
    require_once('../model/db.php');
    require_once('registerCheck.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $password=$_REQUEST['password'];
        $conPass=$_REQUEST['conPass'];
        if($password==$conPass && isPassValid($password)){
            $con=getConnection();
            $sql="UPDATE user " .
            "SET password='$password'" ;
            "WHERE id=$id";
            mysqli_query($con,$sql);
            header('location: ../view/login.php');
        }
        else{
            echo "Error! please try again";
        }
    }
    else{
        echo "Invalid!";
    }
?>