<?php
    require_once('db.php');


    function login($username, $password){
        $con = getConnection();
        $sql = "select * from registration where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    function registration($name,$email,$username,$password,$userType,$gender,$dob){
        $con = getConnection();
        $sql = "INSERT INTO registration (name, email, username, password, userType, gender, dob) 
        VALUES ('$name', '$email', '$username', '$password', '$userType', '$gender', '$dob')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
    function getUser($username){
        $con = getConnection();
        $sql = "select * from registration where username='{$username}'";
        $result = mysqli_query($con, $sql);
        
        $row = mysqli_fetch_assoc($result);
        
        if ($row) {
            return $row;
        } else {
            return null;
        }
    }
    function myProfile($username){
        $con = getConnection();
        $sql = "SELECT * FROM registration WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        if ($row = mysqli_fetch_array($result)) {
                echo $row['username'];
        } 
        else {
                echo "User not found.";
        }
    }

    function updateUser($user){

    }

    function deleteUser($id){

    }


?>