<?php
    $dd=$_REQUEST['dd'];
    $mm=$_REQUEST['mm'];
    $yy=$_REQUEST['yy'];

    if($dd==""||$mm==""||$yy==""){
       echo 'Invalid date of birth';
    }
    else{
        echo $dd,'/',$mm,'/',$yy;
    }
?>