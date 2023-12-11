<?php
require_once('db.php');

function getHost($id)
{
    $con = getConnection();
    $sql = "select * from salary where id = '$id'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Invalid host";
        return false;
    }
}

function getAllHost()
{
    $con = getConnection();
    $sql = "select * from salary";
    $result = mysqli_query($con, $sql);
    $host = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($host, $row);
    }

    return $host;
}

function updateHost($host)
{
    $salary = $host["salary"];
    $id = $host["id"];
    $con = getConnection();
    $sql = "update salary set salary='$salary' where id = '$id'";
    mysqli_query($con, $sql);
    return true;
}

