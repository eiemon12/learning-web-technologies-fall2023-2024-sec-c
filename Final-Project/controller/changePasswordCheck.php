<?php

session_start();
require_once('../model/userModel.php');


         $user=getId($_SESSION['id']);
        $oldpassword=$user['password'];

        if(isset($_REQUEST['submit']))
        {
            $currentpassword = $_REQUEST['currentpassword'];
            $newpassword = $_REQUEST['newpassword'];
            $repassword = $_REQUEST['repassword'];

            if($currentpassword==$oldpassword)
            {
                if($newpassword==$repassword)
                {
                    $con = getConnection();
                    $update = "update users set password ='{$newpassword}' where id=".$_SESSION['id'];
                    $result = mysqli_query($con, $update);
                    if($result)
                    {
                        header('location:logout.php');
                    }
                    else
                    {
                        echo"error";
                    }
                }
                else
                {
                    echo"new and re not match";
                }
            }
            else
            {
                echo"entered worng current pass";
            }
        } 

?>















