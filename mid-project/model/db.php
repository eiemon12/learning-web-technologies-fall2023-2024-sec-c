<?php 

    $dbhost = '127.0.0.1';
    $dbname = 'matrimonial';
    $dbuser = 'root';
    $dbpassword = '';

    function getConnection(){
        global $dbhost;
        global $dbname;
        global $dbpassword;
        global $dbuser;

        $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
        return $con;
    }

?>