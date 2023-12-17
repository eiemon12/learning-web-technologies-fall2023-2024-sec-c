<?php
    require_once('../model/db.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $con=getConnection();
        $sql="delete from station where id=$id";
        mysqli_query($con,$sql);
        header('location: editStation.php');
    }
?>