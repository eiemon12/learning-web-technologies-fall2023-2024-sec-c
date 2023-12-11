<?php
    require_once("../model/userModel.php");


    
        if(isset($_REQUEST['email']))
        {
            $email= $_REQUEST['email'];
            $useremail = useremail($email);
            echo $useremail;
            if($useremail==true)
            {
                header('location:../view/forgotPassword2.php');
                echo "valid User";
            }
            else{
                echo "Invalid user ";
            }
            
        }
        else
            {    
                echo "Invalid Email";
            }
    
?>