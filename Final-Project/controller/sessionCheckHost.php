<?php 
    session_start();
    if($_SESSION['host']!=true){
        header('location: ../view/login.php');
    }
?>