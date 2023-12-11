<?php 
    require_once('../controller/sessionCheckAdmin.php');
    require_once('../model/salaryModel.php');
    $host = getAllHost();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    <a href="../view/dashboardAdmin.php">Back</a> |

    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>USER NAME</th>
            <th>Role</th>
            <th>Gender</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>

<?php for($i=0; $i<count($host); $i++){ ?>
        <tr>
            <td><?=$host[$i]['id']?></td>
            <td><?=$host[$i]['username']?></td>
            <td><?=$host[$i]['role']?></td>
            <td><?=$host[$i]['gender']?></td>
            <td><?=$host[$i]['salary']?></td>
            <td>
                <a href="HostSalaryEdit.php?id=<?=$host[$i]['id']?>"> EDIT </a> |
            </td>
        </tr>
<?php } ?>
    </table>
</body>
</html>