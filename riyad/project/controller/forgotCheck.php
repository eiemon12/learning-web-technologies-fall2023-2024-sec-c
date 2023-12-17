<?php
    require_once('../model/db.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_REQUEST['email'];
        $con=getConnection();
        $sql="select * from user where email='$email'";
        $result=mysqli_query($con,$sql);
        if($result && mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if($row['email']==$email){
                header('location: ../view/forgotNew.php');
            }
            else{
                echo "Email not found";
            }
        }
        else{
            echo "No data !";
        }
    }
    else{
        echo "Error!";
    }
?>