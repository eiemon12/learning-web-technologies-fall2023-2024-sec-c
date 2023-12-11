<?php
    require_once('../model/db.php');
    require_once('../model/userModel.php');
    require_once('../controller/sessionCheckUser.php');

    if (isset($_REQUEST['rating'])) {
        $user = $_SESSION['id'];
        $rating = $_POST['rating'];
        $con = getConnection();
        $stmt = $con->prepare("INSERT INTO rating (username, rating) VALUES (?, ?)");
        $stmt->bind_param("si", $user, $rating);
 
        $stmt->execute();
        $stmt->close();
        $con->close();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Rating Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        header img {
            max-width: 100%;
        }

        form {
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="button"] {
            background-color: #333;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border: none;
        }

        .average-rating {
            margin: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        #messageArea {
        margin-top: 10px;
        padding: 10px;
        border-radius: 5px;
        }

        #messageArea.success {
            background-color: #4CAF50;
            color: #fff;
        }

        #messageArea.error {
            background-color: #F44336;
            color: #fff;
        }
    </style>

    <script>
    function validateRatingForm() {
        var ratingInputs = document.getElementsByName('rating');
        var isChecked = false;

        for (var i = 0; i < ratingInputs.length; i++) {
            if (ratingInputs[i].checked) {
                isChecked = true;
                break;
            }
        }

        if (!isChecked) {
            displayMessage("Please select a rating before submitting.",'error');
            return false;
        }

        return true;
    }

    function submitRating() {
        if (validateRatingForm()) {
            var ratingValue = document.querySelector('input[name="rating"]:checked').value;
            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'rating.php', true);
            xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    var response = xhttp.responseText;
                    if (response === 'success') {
                        displayMessage('Rating submitted successfully!','success');
                    } else {
                        displayMessage('Already Submitted!','error');
                    }
                }
            };
            var data = 'rating=' + ratingValue;
            xhttp.send(data);
        }
    }
    function displayMessage(message, type) {
        var messageArea = document.getElementById('messageArea');
        messageArea.innerHTML = message;
        messageArea.className = type;
        
        setTimeout(function () {
            messageArea.innerHTML = '';
            messageArea.className = '';
        }, 4000);
    }
</script>

</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="your_logo.jpg" alt="Your Logo"> Logged in
                            </td>
                            <td align="right">
                                <a href="searchBar.php">Search Bar</a> |
                            </td>
                        </tr>
                    </table>
                </header>
            </td>
        </tr>

        <tr>
            <td width="220px">
                <table height="100%" width="100%" border="0" cellspacing="0">
                    <tr>
                        <td height="200px">
                            <h4>General User Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboardGeneralUser.php">Dashboard</a></li>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="picture.php">Change Profile Picture</a></li>
                                <li><a href="setting.php">Settings</a></li>
                                <li><a href="rating.php">Give Rating</a></li>
                                <li><a href="review.php">Write Review</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </td>

            <td>
                <div id="messageArea"></div>
                <h3>Rate This Page</h3>
                <form action="rating.php" method="post" onsubmit="return false;" >
                    <label>
                        <input type="radio" name="rating" value="1"> 1
                    </label>
                    <label>
                        <input type="radio" name="rating" value="2"> 2
                    </label>
                    <label>
                        <input type="radio" name="rating" value="3"> 3
                    </label>
                    <label>
                        <input type="radio" name="rating" value="4"> 4
                    </label>
                    <label>
                        <input type="radio" name="rating" value="5"> 5
                    </label>
                    <input type="button" value="Submit Rating" onclick="submitRating()">
                </form>

                <div class="average-rating">
                    <h3>Average Rating</h3>
                    <?php
                   
                    $con = getConnection();
                    $sql = "SELECT AVG(rating) as average FROM rating";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $averageRating = round($row['average'], 2);
                    echo "The average rating is: " . $averageRating;
                    ?>
                </div>
            </td>

        </tr>

        <tr height="40px">
            <td colspan="2" align="center">

                <footer>
                    <a href="">About Us</a>
                    <a href="">Helpline</a>
                    <a href="">FAQ</a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>

    </table>

</body>

</html>

