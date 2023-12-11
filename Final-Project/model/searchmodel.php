<?php
require_once('db.php');

function searchContent($username, $id='') { //$name, $id
    $con = getConnection();

    if (!empty($id))
    {
    $sql = "SELECT * FROM search WHERE username LIKE '%$username%' AND id = '$id'";
    }
    
    else
    {
        $sql = "SELECT * FROM search WHERE username LIKE '%$username%' ";
    }

    $result = mysqli_query($con, $sql);
    return $result;
}


?>
