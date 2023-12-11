<?php 

    require_once('../controller/sessionCheckUser.php'); 
    require_once('../model/userModel.php'); 

    
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