<?php
    require_once('db.php');

    function insertBlog($blog){
        $con = getConnection();
        $sql = "INSERT INTO bloginfo (blog) VALUES('$blog')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
?>