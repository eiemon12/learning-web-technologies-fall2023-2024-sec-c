<?php
require_once('../controller/sessionCheckAdmin.php');
require_once('../model/salaryModel.php');

$id = $_GET['id'];
$host = getHost($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="button"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form id="editForm" method="post" action="../controller/HostSalaryEditCheck.php">
        <fieldset>
            <legend>Edit</legend>

            <input type="hidden" name="id" value="<?= $host['id'] ?>" />
            Salary: <input type="text" name="salary" value="<?= $host['salary'] ?>" /> <br>

            <input type="button" name="submit" value="Edit" onclick="submitForm()" />
        </fieldset>
    </form>

    <script>
        function submitForm() {
            var form = document.getElementById("editForm");
            var formData = new FormData(form);

            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/HostSalaryEditCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // Construct the data to be sent
            var data = 'id=' + formData.get('id') + '&salary=' + formData.get('salary');

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var response = JSON.parse(this.responseText);
                    if (response.success) {
                        var updatedSalary = response.updatedSalary;

                        // Redirect to HostSalary.php with the updated salary
                        window.location.href = "../view/HostSalary.php?updatedSalary=" + updatedSalary;
                    } else {
                        alert("Error updating salary: " + response.message);
                    }
                }
            };

            xhttp.send(data);
        }
    </script>
</body>

</html>
