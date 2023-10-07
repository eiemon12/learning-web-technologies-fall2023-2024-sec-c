<?php
    if(isset($_REQUEST['email'])){
        $email=$_REQUEST['email'];
        echo $email;
    }
?>

<html lang="en">
<head>
    <title>Email Input</title>
</head>
<body>
    <form action="email.php" method="post">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Email</legend>
                        <input type="email" name="email" value=""><hr>
                        <input type="submit" name="submit" value="Submit">
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>