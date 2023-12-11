<?php 

    require_once('../controller/sessionCheckHost.php'); // This line requires the sessionCheck.php file, which checks if the user is logged in.
    require_once('../model/userModel.php'); // This line requires the userModel.php file, which contains the functions for managing users.

    //print_r($_FILES);
    $src = $_FILES['myfile']['tmp_name'];
    $name = $_FILES['myfile']['name'];
    $folder='../upload/'.$name;

    updateImage($_SESSION['id'], $name);    
    

    if(move_uploaded_file($src, $folder)){
        echo "Success";
    }else{
        echo "Error!";
    }

?>