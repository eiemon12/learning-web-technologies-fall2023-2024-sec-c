<?php
    session_start();
    require_once('../model/db.php');

    //$username = $_REQUEST["username"];
    $rating = $_REQUEST["rating"];
    $review = $_REQUEST["review"];
    if(isset($_REQUEST['submit'])){
        $value = insertRating($username,$rating,$review);
        if($value){
            echo "Submitted Successful";
        }
        else{
            echo 'invalid';
        }
    }
?>
