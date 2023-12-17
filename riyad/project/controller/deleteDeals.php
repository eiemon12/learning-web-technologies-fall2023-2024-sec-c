<?php
    require_once('../model/db.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $con=getConnection();
        $sql="delete from deals where id=$id";
        mysqli_query($con,$sql);
        header('location: ../view/deals.php');
    }
?>