<?php
    require_once('db.php');

    function insertEvent($event){
        $con = getConnection();
        $sql = "INSERT INTO eventinfo (event) VALUES('$event')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
?>