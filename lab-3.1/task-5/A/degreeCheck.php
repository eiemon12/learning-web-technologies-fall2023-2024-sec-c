<?php
    $ssc=$_REQUEST['ssc'];
    $hsc=$_REQUEST['hsc'];
    $bsc=$_REQUEST['bsc'];
    $msc=$_REQUEST['msc'];

    if($ssc==true){
        echo $ssc;
    }
    else if($hsc==true){
        echo $hsc;
    }
    else if($bsc==true){
        echo $bsc;
    }
    else if($msc==true){
        echo $msc;
    }
    else if($ssc==true&&$bsc==true){
        echo $ssc,' ',$bsc;
    }
    else if($ssc==true&&$msc==true){
        echo $ssc,' ',$msc;
    }
    else if($ssc==true&&$hsc==true){
        echo $ssc,' ',$hsc;
    }
    else if($hsc==true&&$bsc==true){
        echo $hsc,' ',$bsc;
    }
    else if($hsc==true&&$msc==true){
        echo $hsc,' ',$msc;
    }
    else if($ssc==true&&$hsc==true&&$bsc==true){
        echo $ssc,' ',$hsc,' ',$bsc;
    }
    else if($hsc==true&&$bsc==true&&$msc==true){
        echo $hsc,' ',$bsc,' ',$msc;
    }
    else if($ssc==true&&$hsc==true&&$msc==true){
        echo $ssc,' ',$hsc,' ',$msc;
    }
    else if($ssc==true&&$hsc==true&&$bsc==true&&$msc==true){
        echo $ssc,' ',$hsc,' ',$bsc,' ',$msc;
    }
    else{
        echo 'Invalid Input';
    }
?>