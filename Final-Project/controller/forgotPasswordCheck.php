<?php



require_once('../model/userModel.php');



$newPassword=$_REQUEST['newPassword'];
$confirmPassword=$_REQUEST['confirmPassword'];


    if($newPassword==$confirmPassword)
    {
        session_start();

        $updatePassword = updatePassword($_SESSION['userid'], $newPassword );
        if($updatePassword==true)
        {   
            //echo "success";
            header('location:../view/login.php');
        }
        else{
            echo "Somthing went wrong";
        }
       
    }
    else{
        echo "Password doesnt match";
    }




    
?>