<?php
    require_once('../controller/sessionCheck.php')
?>
<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
        <table border="1" align="center" width="100%" height="100%">
            <tr>
                <td width="30%">
                    <a href="addEmployee.php">Add New Employee</a><br>
                    <a href="viewEmployee.php">View Employee</a><br>
                    <a href="searchEmployee.php">Search Employee</a><br>
                    <a href="../controller/logout.php">Logout</a><br>
                    
                </td>
                <td width="70%">
                    <h2>Welcome Admin</h2>
                </td>
            </tr>
        </table>
    </body>
</html>