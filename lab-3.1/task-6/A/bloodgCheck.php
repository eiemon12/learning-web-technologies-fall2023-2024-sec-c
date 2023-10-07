<?php
    $a1=$_REQUEST['A+'];
    $a2=$_REQUEST['A-'];
    $b1=$_REQUEST['B+'];
    $b2=$_REQUEST['B-'];
    $o1=$_REQUEST['O+'];
    $o2=$_REQUEST['O-'];
    $ab1=$_REQUEST['AB+'];
    $ab2=$_REQUEST['AB-'];
    if($a1==true){
        echo $a1;
    }
    else if($a2==true){
        echo $a2;
    }
    else if($b1==true){
        echo $b1;
    }
    else if($o1==true){
        echo $o1;
    }
    else if($o2==true){
        echo $o2;
    }
    else if($ab1==true){
        echo $a1;
    }
    else if($ab2==true){
        echo $ab2;
    }
    else{
        echo 'Invalid Input';
    }

?>