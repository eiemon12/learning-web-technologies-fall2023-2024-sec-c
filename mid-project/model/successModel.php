<?php
    require_once('db.php');

    function insertSuccess($success){
        $con = getConnection();
        $sql = "INSERT INTO successinfo (success) VALUES('$success')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
?>