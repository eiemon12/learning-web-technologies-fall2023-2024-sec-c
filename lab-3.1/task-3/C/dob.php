<?php
    if(isset($_REQUEST['dd'])){
        $dd=$_REQUEST['dd'];
        $mm=$_REQUEST['mm'];
        $yy=$_REQUEST['yy'];
    }
?>

<html lang="en">
<head>
    <title>DOB Input</title>
</head>
<body>
    <form method="post" action="dob.php">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        dd &emsp;  mm &emsp;  yy <br>
                        <input type="text" name="dd" value="<?php if(isset($dd)){echo $dd;}?>" size="2"> /
                        <input type="text" name="mm" value="<?php if(isset($mm)){echo $mm;}?>" size="2"> / 
                        <input type="text" name="yy" value="<?php if(isset($yy)){echo $yy;}?>" size="2">
                        <hr>
                        <button>Submit</button>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>