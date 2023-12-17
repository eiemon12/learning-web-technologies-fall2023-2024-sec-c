<?php
require_once('../model/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    // Database connection
    $con = getConnection();

    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($_FILES['image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $_SESSION['uploaded_image'] = $targetFile;

            // Store the file path in the database
            $username = $_SESSION['username'];
            $sql = "UPDATE registration SET profile_image='$targetFile' WHERE username='$username'";
            $result = mysqli_query($con, $sql);

            if (!$result) {
                echo "Error updating database: " . mysqli_error($con);
                exit();
            }

            echo "The file " . basename($_FILES['image']['name']) . " has been uploaded and stored in the database.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close the database connection
    mysqli_close($con);
}
?>