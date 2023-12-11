<?php

    require_once('db.php');

    function login($username, $password) {
        $con = getConnection();
        $sql = "SELECT * FROM userinfo WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
           
            return $row;
        }
        return false;
    }

    function registration($name,$email,$username,$password,$userType,$gender,$dob){
        $con = getConnection();
        $sql = "INSERT INTO userinfo (name, email, username, password, userType, gender, dob) 
        VALUES ('$name', '$email', '$username', '$password', '$userType', '$gender', '$dob')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function isPassValid($password){
        $specialChar=['@','#','$','%'];
        if(strlen($password) >= 4){
            for($i=0;$i<strlen($password);$i++){
                if(in_array($password[$i] , $specialChar)){
                    return true;
                }
            }
        }
        return false;
    }
    function getUser($username){
        $con = getConnection();
        $sql = "select * from userinfo where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            return $row;
        } else {
            return null;
        }
    }

    
    

    

    function insertRating($username,$rating,$review){
        $con = getConnection();
        $sql = "INSERT INTO  r&r(username, rating, review) VALUES ('$username','$rating','$review')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
    /*function myProfile($username){
        $con = getConnection();
        $sql = "SELECT * FROM registration WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        if ($row = mysqli_fetch_array($result)) {
                echo $row['username'];
        } 
        else {
                echo "User not found.";
        }
    }
         require_once('../model/db.php');
                    // Connect to the database
                    $con = getConnection();

                    if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    }

                    // Calculate the average rating
                    $sql = "SELECT AVG(rating) AS average_rating FROM r&r";
                    $result = $con->query($sql);
                    $row = $result->fetch_assoc();

                    if ($row) {
                        echo "Average Rating: " . round($row["average_rating"], 2);
                    }

                    // Display individual ratings
                    $sql = "SELECT rating, date FROM r&r";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<h2>All Ratings:</h2>";
                        while ($row = $result->fetch_assoc()) {
                            echo "Rating: " . $row["rating"] . ")<br>";
                        }
                    }

                    $conn->close();
                    ?>
    
    */

    function updateUser($user){

    }

    function deleteUser($id){

    }


?>