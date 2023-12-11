<?php 
    session_start();
    if($_SESSION['admin']!=true){
        header('location: ../view/login.php');
    }
?>