<?php
    include("db_config.php");

    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $email = mysqli_real_escape_string($conn, $email);

    $query = "SELECT * FROM persons WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
      
        if (mysqli_num_rows($result) > 0) {
            echo "Email not available";
        } else {
            echo "Email available"; 
        }
    } else {
      
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
