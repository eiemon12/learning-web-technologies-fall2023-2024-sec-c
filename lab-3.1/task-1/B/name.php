<?php
    if(isset($_REQUEST['name'])){
        $name=$_REQUEST['name'];
        echo $name;
    }  
?>

<html lang="en">
<head>
    <title>Name Input</title>
</head>
<body>
    <form action="name.php" method="post">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Name</legend>
                        <input type="text" name="name" value=""><hr>
                        <input type="submit" name="submit" value="Submit">
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>
        
    </form>
</body>
</html>