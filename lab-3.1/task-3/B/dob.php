<?php
    if(isset($_REQUEST['dd'])){
        $dd=$_REQUEST['dd'];
        $mm=$_REQUEST['mm'];
        $yy=$_REQUEST['yy'];

        if($dd==""||$mm==""||$yy==""){
        echo 'Invalid date of birth';
        }
        else{
            echo $dd,'/',$mm,'/',$yy;
        }
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
                        <input type="text" name="dd" value="" size="2"> /
                        <input type="text" name="mm" value="" size="2"> / 
                        <input type="text" name="yy" value="" size="2">
                        <hr>
                        <button>Submit</button>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>