<?php
    if(isset($_REQUEST['gender'])){
        $gender=$_REQUEST['gender'];
        echo $gender;
    }
?>

<html lang="en">
<head>
    <title>Gender Input</title>
</head>
<body>
    <form method="post" action="gender.php">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male"/>Male
                        <input type="radio" name="gender" value="Female"/>Female
                        <input type="radio" name="gender" value="Other"/>Other <hr>
                        <input type="submit" name="submit" value="Submit"/>
                    </fieldset>
                </td>
        </table>
    </form>
</body>
</html>