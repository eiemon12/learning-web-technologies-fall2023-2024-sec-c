<?php
    require_once('db.php');

function insertterms($terms){
        $con = getConnection();
        $sql = "INSERT INTO terms(term) VALUES('$terms')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }

?>