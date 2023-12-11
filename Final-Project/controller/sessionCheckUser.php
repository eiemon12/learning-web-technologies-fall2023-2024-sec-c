<?php 
    session_start();
    if($_SESSION['user']!=true){
        header('location: ../view/login.php');
    }
?>