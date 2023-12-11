<?php
require_once('../model/db.php');
require_once('../model/userModel.php');
require_once('../controller/sessionCheckUser.php');

if (isset($_POST['submitReview'])) {
    $user = $_SESSION['id'];
    $review = $_POST['review'];
    $con = getConnection();
    $stmt = $con->prepare("INSERT INTO review (username, review) VALUES (?, ?)");
    $stmt->bind_param("ss", $user, $review);

    $stmt->execute();
    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Review Page</title>
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

        textarea {
            width: 90%;
            height: 100px;
            resize: none;
            padding: 5px;
        }

        input[type="button"] {
            background-color: #333;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border: none;
        }

        .reviews {
            margin: 20px;
        }

        .review {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
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
        function validateReviewForm() {
            var reviewContent = document.getElementById("review").value;
            if (reviewContent.trim() === "") {
                displayMessage("Review content must not be empty",'error');
                return false;
            }
            return true;
        }

        function submitReview() {
            if (validateReviewForm()) {
                var reviewValue = document.getElementById('review').value;
                var xhttp = new XMLHttpRequest();
                xhttp.open('POST', 'review.php', true);
                xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        var response = xhttp.responseText;
                        if (response === 'success') {
                            displayMessage('Review submitted successfully!','success');
                        } else {
                            displayMessage('Already Submitted!','error');
                        }
                    }
                };
                var data = 'review=' + reviewValue;
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
    <table width="100%"  height="100%" border="1">
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
                <h3>Write a Review</h3>
                <form action="review.php" method="post" onsubmit="return false;">
                    <label for="review">Your Review:</label>
                    <textarea id="review" name="review"></textarea>
                    <input type="button" value="Submit Review" onclick="submitReview()">
                </form>
            
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
