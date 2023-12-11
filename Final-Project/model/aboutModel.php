<?php

    require_once('db.php');

    function insertabout($about){
        $con = getConnection();
        $sql = "INSERT INTO about(abt) VALUES('$about')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }

?>